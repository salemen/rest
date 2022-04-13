<?php

namespace app\modules\b2b\models;

use Yii;

/**
 * This is the model class for table "consult_type".
 *
 * @property int $1
 * @property int $consult
 * @property string $type
 */
class ConsultType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consult_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['consult', 'type'], 'required'],
            [['consult'], 'integer'],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '1' => '1',
            'consult' => 'Consult',
            'type' => 'Type',
        ];
    }
}
