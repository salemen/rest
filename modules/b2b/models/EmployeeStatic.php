<?php

namespace app\modules\b2b\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property string $id
 * @property string|null $guid
 * @property string $fullname
 * @property string|null $snils
 * @property string|null $username
 * @property string|null $city
 * @property string|null $user_birth
 * @property string|null $phone_work
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $photo
 * @property string|null $auth_key
 * @property int|null $sex
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $last_activity
 */
class EmployeeStatic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fullname'], 'required'],
            [['sex', 'status', 'created_at', 'last_activity'], 'integer'],
            [['id', 'guid', 'fullname', 'snils', 'username', 'city', 'user_birth', 'phone_work', 'phone', 'email', 'photo', 'auth_key'], 'string', 'max' => 255],
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
            'guid' => 'Guid',
            'fullname' => 'Fullname',
            'snils' => 'Snils',
            'username' => 'Username',
            'city' => 'City',
            'user_birth' => 'User Birth',
            'phone_work' => 'Phone Work',
            'phone' => 'Phone',
            'email' => 'Email',
            'photo' => 'Photo',
            'auth_key' => 'Auth Key',
            'sex' => 'Sex',
            'status' => 'Status',
            'created_at' => 'Created At',
            'last_activity' => 'Last Activity',
        ];
    }
}
