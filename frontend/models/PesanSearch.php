<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pesan;

/**
 * PesanSearch represents the model behind the search form of `frontend\models\Pesan`.
 */
class PesanSearch extends Pesan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPESAN', 'IDPENGIRIMPESAN', 'IDTIPEPESAN', 'IDPENERIMAPESAN'], 'integer'],
            [['ISIPESAN', 'WAKTUPESAN'], 'safe'],
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
        $query = Pesan::find();

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
            'IDPESAN' => $this->IDPESAN,
            'IDPENGIRIMPESAN' => $this->IDPENGIRIMPESAN,
            'IDTIPEPESAN' => $this->IDTIPEPESAN,
            'IDPENERIMAPESAN' => $this->IDPENERIMAPESAN,
            'WAKTUPESAN' => $this->WAKTUPESAN,
        ]);

        $query->andFilterWhere(['like', 'ISIPESAN', $this->ISIPESAN]);

        return $dataProvider;
    }
}
