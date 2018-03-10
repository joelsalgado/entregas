<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BeneficiariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beneficiarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficiarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'FOLIO',
            //'CVE_PROGRAMA',
            //'N_PERIODO',
            'ID_TARJETA',
            'NOMBRES',
            'PRIMER_APELLIDO',
            'SEGUNDO_APELLIDO',
            //'CVE_REGION',
            //'REGIONDESCRIPCION',
            //'CVE_MUNICIPIO',
            //'MUNICIPIONOMBRE',
            //'TARJETA',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Acciones',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{entrega}',
                'buttons' => [
                    'entrega' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-apple"></span> Entrega', $url, [
                            'title' => Yii::t('app', 'entrga'),
                        ]);
                    },
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'entrega') {
                        $url =Yii::$app->homeUrl.'beneficiarios/entrega?id='.$model->FOLIO;
                        return $url;
                    }
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
