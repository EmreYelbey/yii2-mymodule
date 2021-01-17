<?php

namespace emreyelbey\content\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use emreyelbey\content\models\Stocklists;

/**
 * StocklistsSearch represents the model behind the search form of `vendor\emreyelbey\content\src\models\Stocklists`.
 */
class StocklistsSearch extends Stocklists
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['sellername', 'productsname'], 'safe'],
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
        $query = Stocklists::find();

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
        ]);

        $query->andFilterWhere(['like', 'sellername', $this->sellername])
            ->andFilterWhere(['like', 'productsname', $this->productsname]);

        return $dataProvider;
    }
}
