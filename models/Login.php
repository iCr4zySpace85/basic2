<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property int $id
 * @property string $email
 * @property string|null $clave
 * @property string|null $tipoUsuario
 *
 * @property Usuario[] $usuarios
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'email'], 'required'],
            [['id'], 'integer'],
            [['tipoUsuario'], 'string'],
            [['email'], 'string', 'max' => 50],
            [['clave'], 'string', 'max' => 10],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'clave' => 'Clave',
            'tipoUsuario' => 'Tipo de Usuario',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class, ['login_email' => 'email']);
    }
}
