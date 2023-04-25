<?php

namespace app\modules\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\Items;

/**
 * ItemsSearch represents the model behind the search form of `app\modules\models\Items`.
 */
class ItemsSearch extends Items
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
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
    public function search($search, $pill, $step, $status)
    {
        $query = Items::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 200
            ],
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $this->filterPills($query, $pill);
        $this->filterSteps($query, $step, $pill, $status);

        if ($search) {
            if (is_numeric($search)) {
                $query->andFilterWhere(['like', 'item_id', $search]);
            } else {
                $query->joinWith(['itemtitle']);
                $query->andFilterWhere(['or', ['like', 'title', $search], ['like', 'description', $search]]);
            }
        } else {
            $query->orderBy([
                'priority' => SORT_DESC,
                'item_id' => SORT_ASC
            ]);
        }
        return $dataProvider;
    }

    public function filterPills($query, $pill) {
        switch ($pill) {
            case 1:
                $query->andFilterWhere(['check1' => 1, 'deleted' => 0]);
                break;
            case 2:
                $query->andFilterWhere(['source' => 0, 'deleted' => 0, 'check1' => 0]);
                break;
            case 3:
                $query->andFilterWhere(['source' => 1, 'deleted' => 0, 'check1' => 0]);
                break;
            case 4:
                $query->andFilterWhere(['deleted' => 1]);
                break;
        }
    }

    public function filterSteps($query, $step, $pill, $status = null) {
        if ($pill == 3) {
            switch ($step) {
                case 1:
                    $query->andFilterWhere(['check2' => 0, 'check3' => 0, 'check4' => 0]);
                    break;
                case 2:
                    $query->andFilterWhere(['check2' => 0, 'check3' => 0, 'check4' => 1]);
                    break;
                case 3:
                    $query->andFilterWhere(['check2' => 0, 'check3' => 0, 'check4' => 2]);
                    break;
                case 4:
                    $query->andFilterWhere(['check2' => 0, 'check3' => 1, 'check4' => 2]);
                    break;
                case 5:
                    $query->andFilterWhere(['check2' => 1, 'check3' => 1, 'check4' => 2]);
                    break;
                case 6:
                    $status && $query->andFilterWhere(['returned' => $status - 1]);
                    $query->andFilterWhere(['check2' => 2, 'check3' => 1, 'check4' => 2]);
                    break;
                case 7:
                    $status && $query->andFilterWhere(['returned' => $status - 1]);
                    $query->andFilterWhere(['check2' => 2, 'check3' => 2, 'check4' => 2]);
                    break;
                case 8:
                    $query->andFilterWhere(['check2' => 2, 'check3' => 2, 'check4' => 3]);
                    break;
                case 9:
                    $query->andFilterWhere(['check2' => 3, 'check3' => 2, 'check4' => 3]);
                    break;
            }
        }
    }
}
