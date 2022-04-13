<?php

namespace app\models;

use Yii;

/**
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $updatet_at
 * @property string $created_at
 */
class Rest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rest';
    }


    public function rules()
    {
        return [
            [['name', 'address'], 'required'],
            [['updatet_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'address' => 'Адрес',
            'updatet_at' => 'Дата обновления',
            'created_at' => 'Дата создания',
        ];
    }
}
