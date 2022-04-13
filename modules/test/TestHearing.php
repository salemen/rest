<?php

namespace app\modules\test;

use Yii;

/**
 * This is the model class for table "test_hearing".
 *
 * @property int $id
 * @property string $user_id
 * @property string $phone
 * @property string $result
 */
class TestHearing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_hearing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'phone', 'result'], 'required'],
            [['user_id', 'phone', 'result'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'phone' => 'Phone',
            'result' => 'Result',
        ];
    }
}
