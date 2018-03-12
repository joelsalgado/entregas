<?php

namespace frontend\controllers;

use common\models\Entregas;
use Yii;
use common\models\Beneficiarios;
use common\models\BeneficiariosSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User as Usuarios;

/**
 * BeneficiariosController implements the CRUD actions for Beneficiarios model.
 */
class BeneficiariosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'entrega'],
                'rules' => [
                    [
                        'actions' => ['index', 'entrega'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            $valid_roles = [Usuarios::ROLE_ADMIN, Usuarios::ROLE_SUP];
                            return Usuarios::roleInArray($valid_roles);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Beneficiarios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BeneficiariosSearch();
        if(Yii::$app->request->queryParams){
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }else{
            $query = Beneficiarios::find()->where('FOLIO < 0');
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Beneficiarios model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        die;
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Beneficiarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        die;
        $model = new Beneficiarios();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        die;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        die;
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionEntrega($id){
        $beneficiario = Beneficiarios::findOne($id);
        $fecha1 = Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd');
        $fecha2 =  Yii::$app->formatter->asDatetime('now','yyyy-MM-dd H:mm:ss');
        if($beneficiario){
            $entrega = Entregas::find()->where(['FOLIO' => $id, 'status_canasta' => 1])->one();
            if($entrega){
                if ($entrega->load(Yii::$app->request->post())) {
                    $entrega->updated_at = $fecha2;
                    if($entrega->save()){
                        return $this->redirect(['index']);
                    }
                }

                return $this->render('update_entrega', [
                    'model' => $entrega,
                ]);

            }else{
                $model = new Entregas();
                if ($model->load(Yii::$app->request->post())) {
                    $model->FOLIO = $beneficiario->FOLIO;
                    $model->CVE_PROGRAMA = $beneficiario->CVE_PROGRAMA;
                    $model->N_PERIODO = $beneficiario->N_PERIODO;
                    $model->fecha = $fecha1;
                    $model->created_at = $fecha2;
                    $model->updated_at = $fecha2;

                    if($model->save()){
                        Yii::$app->session->setFlash('success', 'Entrega Realizada Correctamente');
                        return $this->redirect(['index']);
                    }

                }
                return $this->render('create_entrega', [
                    'model' => $model,
                ]);
            }
        }
        else{
            throw new NotFoundHttpException('Falta ID');
        }
    }

    protected function findModel($id)
    {
        if (($model = Beneficiarios::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
