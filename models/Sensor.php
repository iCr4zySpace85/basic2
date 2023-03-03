<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensor".
 *
 * @property int $id
 * @property string|null $accion
 * @property string|null $fecha
 * @property int $usuario_id
 * @property string|null $estado
 *
 * @property Usuario $usuario
 */
class Sensor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accion'], 'string'],
            [['usuario_id'], 'required'],
            [['usuario_id'], 'integer'],
            [['fecha'], 'string', 'max' => 40],
            [['estado'], 'string', 'max' => 1],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accion' => 'Accion',
            'fecha' => 'Fecha',
            'usuario_id' => 'Usuario ID',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'usuario_id']);
    }
}
