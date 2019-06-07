<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Hubungan;

/**
 * HubunganSearch represents the model behind the search form of `backend\models\Hubungan`.
 */
class HubunganSearch extends Hubungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDHUBUNGAN', 'IDSTATUS', 'IDPENGGUNA1', 'IDPENGGUNA2'], 'integer'],
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
        $query = Hubungan::find();

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
            'IDHUBUNGAN' => $this->IDHUBUNGAN,
            'IDSTATUS' => $this->IDSTATUS,
            'IDPENGGUNA1' => $this->IDPENGGUNA1,
            'IDPENGGUNA2' => $this->IDPENGGUNA2,
        ]);

        return $dataProvider;
    }
}
