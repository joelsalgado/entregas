<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cat_programas".
 *
 * @property int $id
 * @property int $prog_id
 * @property string $prog_desc
 * @property int $status
 *
 * @property User[] $users
 */
class Programas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_programas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prog_id'], 'required'],
            [['prog_id', 'status'], 'integer'],
            [['prog_desc'], 'string', 'max' => 120],
            [['prog_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prog_id' => 'Prog ID',
            'prog_desc' => 'Prog Desc',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['prog_id' => 'prog_id']);
    }

    public static function getProgramasOk(){
        if(Yii::$app->user->identity->role == 30){
            $programas_activos = self::find()
                ->select(['prog_id', 'prog_desc'])
                ->where(['status' => 10])
                ->orderBy(['prog_desc' => 'DESC'])
                ->all();
        }else{
            $programas_activos = self::find()
                ->select(['prog_id', 'prog_desc'])
                ->where(['status' => 10])
                ->andWhere(['prog_id' => Yii::$app->user->identity->prog_id ])
                ->orderBy(['prog_desc' => 'DESC'])
                ->all();
        }

        return $programas_activos;
    }
}
