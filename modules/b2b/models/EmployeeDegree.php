<?php

namespace app\modules\b2b\models;

use Yii;

/**
 * This is the model class for table "employee_degree".
 *
 * @property int $id
 * @property string $employee_id
 * @property string|null $empl_rank
 * @property string|null $empl_degree
 */
class EmployeeDegree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee_degree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id'], 'required'],
            [['employee_id', 'empl_rank', 'empl_degree'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee ID',
            'empl_rank' => 'Empl Rank',
            'empl_degree' => 'Empl Degree',
        ];
    }
}
