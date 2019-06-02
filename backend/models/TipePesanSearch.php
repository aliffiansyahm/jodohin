<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TipePesan;

/**
 * TipePesanSearch represents the model behind the search form of `backend\models\TipePesan`.
 */
class TipePesanSearch extends TipePesan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDTIPEPESAN'], 'integer'],
            [['NAMATIPEPESAN'], 'safe'],
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
        $query = TipePesan::find();

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
            'IDTIPEPESAN' => $this->IDTIPEPESAN,
        ]);

        $query->andFilterWhere(['like', 'NAMATIPEPESAN', $this->NAMATIPEPESAN]);

        return $dataProvider;
    }
}
