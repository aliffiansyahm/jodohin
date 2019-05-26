<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `frontend\models\Pengguna`.
 */
class PenggunaSearch extends Pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGGUNA', 'IDKEPRIBADIAN'], 'integer'],
            [['EMAIL', 'PASSWORD', 'NAMA', 'TANGGALLAHIR', 'ALAMAT', 'BIO', 'FOTO', 'JENISKELAMIN'], 'safe'],
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
        $query = Pengguna::find();

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
            'IDPENGGUNA' => $this->IDPENGGUNA,
            'IDKEPRIBADIAN' => $this->IDKEPRIBADIAN,
            'TANGGALLAHIR' => $this->TANGGALLAHIR,
        ]);

        $query->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'ALAMAT', $this->ALAMAT])
            ->andFilterWhere(['like', 'BIO', $this->BIO])
            ->andFilterWhere(['like', 'FOTO', $this->FOTO])
            ->andFilterWhere(['like', 'JENISKELAMIN', $this->JENISKELAMIN]);

        return $dataProvider;
    }
}
