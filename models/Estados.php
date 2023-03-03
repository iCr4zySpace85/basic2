<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estados".
 *
 * @property int $id
 * @property string $nombre
 * @property int $pais
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'pais'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['id'], 'unique'],
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
            'pais' => 'Pais',
        ];
    }
}
