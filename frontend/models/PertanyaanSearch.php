<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pertanyaan;

/**
 * PertanyaanSearch represents the model behind the search form of `frontend\models\Pertanyaan`.
 */
class PertanyaanSearch extends Pertanyaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPERTANYAAN'], 'integer'],
            [['PERTANYAAN', 'PILIHAN1', 'PILIHAN2', 'PILIHAN3', 'PILIHAN4'], 'safe'],
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
        $query = Pertanyaan::find();

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
            'IDPERTANYAAN' => $this->IDPERTANYAAN,
        ]);

        $query->andFilterWhere(['like', 'PERTANYAAN', $this->PERTANYAAN])
            ->andFilterWhere(['like', 'PILIHAN1', $this->PILIHAN1])
            ->andFilterWhere(['like', 'PILIHAN2', $this->PILIHAN2])
            ->andFilterWhere(['like', 'PILIHAN3', $this->PILIHAN3])
            ->andFilterWhere(['like', 'PILIHAN4', $this->PILIHAN4]);

        return $dataProvider;
    }
}
