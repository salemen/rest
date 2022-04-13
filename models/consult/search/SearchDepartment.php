<?php

namespace app\models\consult\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\consult\ConsultDepartment;

/**
 * SearchDepartment represents the model behind the search form of `app\models\consult\ConsultDepartment`.
 */
class SearchDepartment extends ConsultDepartment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dep_id', 'e_hide', 'p_hide', 'is_canceled', 'is_end', 'is_payd', 'is_special', 'created_at', 'ended_at'], 'integer'],
            [['employee_id', 'patient_id', 'comment'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ConsultDepartment::find()->joinWith(['employee', 'patient', 'payment']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dep_id' => $this->dep_id,
            'e_hide' => $this->e_hide,
            'p_hide' => $this->p_hide,
            'is_canceled' => $this->is_canceled,
            'is_end' => $this->is_end,
            'is_payd' => $this->is_payd,
            'is_special' => $this->is_special,
            'created_at' => $this->created_at,
            'ended_at' => $this->ended_at,
        ]);

        $query->andFilterWhere(['like', 'employee_id', $this->employee_id])
            ->andFilterWhere(['like', 'patient_id', $this->patient_id])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
