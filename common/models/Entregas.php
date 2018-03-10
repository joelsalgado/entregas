<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;

class Entregas extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'entregas';
    }

    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ]
        ];
    }

    public function rules()
    {
        return [
            [['FOLIO', 'CVE_PROGRAMA', 'N_PERIODO', 'status_canasta', 'status_comprobante', 'created_by', 'updated_by'], 'integer'],
            [['fecha', 'created_at', 'updated_at'], 'safe'],
            [['created_at', 'updated_at'], 'required'],
            [['FOLIO'], 'exist', 'skipOnError' => true, 'targetClass' => Beneficiarios::className(), 'targetAttribute' => ['FOLIO' => 'FOLIO']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FOLIO' => 'Folio',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'N_PERIODO' => 'N  Periodo',
            'status_canasta' => 'Canasta Alimentaria',
            'status_comprobante' => 'Comprobante',
            'fecha' => 'Fecha',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getFOLIO()
    {
        return $this->hasOne(Beneficiarios::className(), ['FOLIO' => 'FOLIO']);
    }
}
