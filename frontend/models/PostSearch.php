<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Post;

/**
 * PostSearch represents the model behind the search form of `frontend\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPOST', 'IDPENGGUNA'], 'integer'],
            [['GAMBARPOST', 'CAPTION', 'WAKTUPOST'], 'safe'],
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
        $query = Post::find();

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
            'IDPOST' => $this->IDPOST,
            'IDPENGGUNA' => $this->IDPENGGUNA,
            'WAKTUPOST' => $this->WAKTUPOST,
        ]);

        $query->andFilterWhere(['like', 'GAMBARPOST', $this->GAMBARPOST])
            ->andFilterWhere(['like', 'CAPTION', $this->CAPTION]);

        return $dataProvider;
    }
}
