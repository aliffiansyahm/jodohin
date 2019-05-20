<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Notifikasi;

/**
 * NotifikasiSearch represents the model behind the search form of `frontend\models\Notifikasi`.
 */
class NotifikasiSearch extends Notifikasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDNOTIFIKASI', 'IDPENGIRIMNOTIF', 'IDTYPENOTIFIKASI', 'IDPENERIMANOTIF', 'STATUSNOTIFIKASI'], 'integer'],
            [['ISI', 'WAKTUNOTIFIKASI'], 'safe'],
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
        $query = Notifikasi::find();

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
            'IDNOTIFIKASI' => $this->IDNOTIFIKASI,
            'IDPENGIRIMNOTIF' => $this->IDPENGIRIMNOTIF,
            'IDTYPENOTIFIKASI' => $this->IDTYPENOTIFIKASI,
            'IDPENERIMANOTIF' => $this->IDPENERIMANOTIF,
            'WAKTUNOTIFIKASI' => $this->WAKTUNOTIFIKASI,
            'STATUSNOTIFIKASI' => $this->STATUSNOTIFIKASI,
        ]);

        $query->andFilterWhere(['like', 'ISI', $this->ISI]);

        return $dataProvider;
    }
}
