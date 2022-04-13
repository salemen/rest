<?php

namespace app\modules\test;

use Yii;

/**
 * This is the model class for table "rest".
 *
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'updatet_at', 'created_at'], 'required'],
            [['updatet_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'updatet_at' => 'Updatet At',
            'created_at' => 'Created At',
        ];
    }
}
