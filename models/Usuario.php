<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property string|null $fechaRegis
 * @property string|null $habilitado
 * @property string $login_email
 *
 * @property Login $loginEmail
 * @property Sensor[] $sensors
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['habilitado'], 'string'],
            [['login_email'], 'required'],
            [['nombre', 'apellidos'], 'string', 'max' => 35],
            [['fechaRegis'], 'string', 'max' => 40],
            [['login_email'], 'string', 'max' => 50],
            [['login_email'], 'exist', 'skipOnError' => true, 'targetClass' => Login::class, 'targetAttribute' => ['login_email' => 'email']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'fechaRegis' => 'Fecha Regis',
            'habilitado' => 'Habilitado',
            'login_email' => 'Login Email',
        ];
    }

    /**
     * Gets query for [[LoginEmail]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLoginEmail()
    {
        return $this->hasOne(Login::class, ['email' => 'login_email']);
    }

    /**
     * Gets query for [[Sensors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSensors()
    {
        return $this->hasMany(Sensor::class, ['usuario_id' => 'id']);
    }
}
