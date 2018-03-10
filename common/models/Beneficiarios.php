<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "beneficiarios".
 *
 * @property int $FOLIO
 * @property int $CVE_PROGRAMA
 * @property int $N_PERIODO
 * @property string $NOMBRES
 * @property string $SEGUNDO_APELLIDO
 * @property string $PRIMER_APELLIDO
 * @property int $CVE_REGION
 * @property string $REGIONDESCRIPCION
 * @property int $CVE_MUNICIPIO
 * @property string $MUNICIPIONOMBRE
 * @property string $TARJETA
 * @property string $ID_TARJETA
 */
class Beneficiarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beneficiarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CVE_PROGRAMA', 'N_PERIODO', 'CVE_REGION', 'CVE_MUNICIPIO'], 'integer'],
            [['NOMBRES', 'SEGUNDO_APELLIDO', 'PRIMER_APELLIDO'], 'string', 'max' => 80],
            [['REGIONDESCRIPCION'], 'string', 'max' => 30],
            [['MUNICIPIONOMBRE'], 'string', 'max' => 50],
            [['TARJETA', 'ID_TARJETA'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FOLIO' => 'Folio',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'N_PERIODO' => 'N  Periodo',
            'NOMBRES' => 'Nombres',
            'SEGUNDO_APELLIDO' => 'Segundo  Apellido',
            'PRIMER_APELLIDO' => 'Primer  Apellido',
            'CVE_REGION' => 'Cve  Region',
            'REGIONDESCRIPCION' => 'Regiondescripcion',
            'CVE_MUNICIPIO' => 'Cve  Municipio',
            'MUNICIPIONOMBRE' => 'Municipionombre',
            'TARJETA' => 'Tarjeta',
            'ID_TARJETA' => 'Id  Tarjeta',
        ];
    }
}
