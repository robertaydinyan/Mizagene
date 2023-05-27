<?php

namespace app\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\ParameterInfluence;

/**
 * ParameterInfluenceSearch represents the model behind the search form of `app\modules\models\ParameterInfluence`.
 */
class ParameterInfluenceSearch extends ParameterInfluence
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type', 'item_id'], 'integer'],
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
        $query = ParameterInfluence::find();

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
        $query->andFilterWhere(['pushed' => $page]);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'item_id' => $this->item_id,
        ]);

        return $dataProvider;
    }
}
