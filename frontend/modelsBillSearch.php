<?php

namespace frontend;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bill;

/**
 * modelsBillSearch represents the model behind the search form about `frontend\models\Bill`.
 */
class modelsBillSearch extends Bill
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bill_no'], 'safe'],
            [['year'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Bill::find();

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
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'bill_no', $this->bill_no]);

        return $dataProvider;
    }
}
