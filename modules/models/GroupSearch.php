<?php

namespace app\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\Group;

/**
 * GroupSearch represents the model behind the search form of `app\modules\models\Group`.
 */
class GroupSearch extends Group
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer']
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
    public function search($params, $page = 1)
    {
        $query = Group::find();

        // add conditions that should always apply here
        $query->andFilterWhere(['pushed' => $page]);
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

        return $dataProvider;
    }


    public function filterByText($query, $search, $t = true) {
        if (is_numeric($search)) {
            $query->andFilterWhere(['like', 'id', $search]);
        } else {
            $query->andFilterWhere(['or', ['like', 'title_russian', $search], ['like', 'title_english', $search], ['like', 'description_english', $search], ['like', 'description_russian', $search]]);
        }
    }
}
