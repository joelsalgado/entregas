<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Beneficiarios;

/**
 * BeneficiariosSearch represents the model behind the search form of `common\models\Beneficiarios`.
 */
class BeneficiariosSearch extends Beneficiarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FOLIO', 'CVE_PROGRAMA', 'N_PERIODO', 'CVE_REGION', 'CVE_MUNICIPIO'], 'integer'],
            [['NOMBRES', 'SEGUNDO_APELLIDO', 'PRIMER_APELLIDO', 'REGIONDESCRIPCION', 'MUNICIPIONOMBRE', 'TARJETA', 'ID_TARJETA'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Beneficiarios::find();
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            //$query->where('FOLIO < 1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'FOLIO' => $this->FOLIO,
            'CVE_PROGRAMA' => $this->CVE_PROGRAMA,
            'N_PERIODO' => $this->N_PERIODO,
            'CVE_REGION' => $this->CVE_REGION,
            'CVE_MUNICIPIO' => $this->CVE_MUNICIPIO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRES', $this->NOMBRES])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO', $this->SEGUNDO_APELLIDO])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO', $this->PRIMER_APELLIDO])
            ->andFilterWhere(['like', 'REGIONDESCRIPCION', $this->REGIONDESCRIPCION])
            ->andFilterWhere(['like', 'MUNICIPIONOMBRE', $this->MUNICIPIONOMBRE])
            ->andFilterWhere(['like', 'TARJETA', $this->TARJETA])
            ->andFilterWhere(['ID_TARJETA' => $this->ID_TARJETA]);

        return $dataProvider;
    }
}
