<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TipeStatus;

/**
 * TipeStatusSearch represents the model behind the search form of `backend\models\TipeStatus`.
 */
class TipeStatusSearch extends TipeStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDSTATUS'], 'integer'],
            [['NAMASTATUS'], 'safe'],
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
        $query = TipeStatus::find();

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
            'IDSTATUS' => $this->IDSTATUS,
        ]);

        $query->andFilterWhere(['like', 'NAMASTATUS', $this->NAMASTATUS]);

        return $dataProvider;
    }
}
