<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doctor_reg".
 *
 * @property int $id
 * @property string $username
 * @property string $surname
 * @property string $patronymic
 * @property string $email
 * @property string $telephone
 * @property string $date
 */
class DoctorReg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor_reg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'surname', 'patronymic', 'email', 'telephone'], 'required'],
            [['date'], 'safe'],
            [['username', 'surname', 'patronymic', 'email'], 'string', 'max' => 50],
            [['telephone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'date' => 'Date',
        ];
    }
}
