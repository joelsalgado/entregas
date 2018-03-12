<?php

namespace frontend\models;

use common\behaviors\AuthKeyBehavior;
use common\models\Programas;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

class User extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'name', 'password_hash', 'email'], 'required', 'message' => 'Campo obligatorio'],
            [['role', 'prog_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 180],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            ['email','email', 'message' => 'Formato de correo no valido'],
            [['username','email'], 'unique', 'message' => 'Ya existe un registro con este valor'],
            [['prog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Programas::className(), 'targetAttribute' => ['prog_id' => 'prog_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Usuario',
            'name' => 'Nombre',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Contraseña',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Correo Electronico',
            'role' => 'Rol',
            'prog_id' => 'Programa',
            'status' => 'Estado',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
            [
                'class' => AuthKeyBehavior::className(),
            ],
            [
                'class' => BlameableBehavior::className(),
            ]
        ];
    }

    public function getProg()
    {
        return $this->hasOne(Programas::className(), ['prog_id' => 'prog_id']);
    }
}
