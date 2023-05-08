<?php

namespace app\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\Reports;

/**
 * ReportsSearch represents the model behind the search form of `app\modules\models\Reports`.
 */
class ReportsSearch extends Reports
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title_russian', 'title_english'], 'integer'],
            [['groups', 'datetime'], 'safe'],
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
        $query = Reports::find();

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
            'title_russian' => $this->title_russian,
            'title_english' => $this->title_english,
            'datetime' => $this->datetime,
        ]);

        $query->andFilterWhere(['like', 'groups', $this->groups]);

        return $dataProvider;
    }
}
