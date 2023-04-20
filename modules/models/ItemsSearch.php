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
        return [
            [['id', 'e2e_item_id', 'item_id', 'i_result_sector1_colorid', 'i_result_sector2_colorid', 'i_result_sector3_colorid', 'i_result_sector4_colorid', 'i_result_sector5_colorid', 'i_result_sector6_colorid', 'i_result_sector7_colorid', 'i_result_sector8_colorid', 'i_result_sector9_colorid', 'i_result_sector10_colorid'], 'integer'],
            [['i_type', 'i_usg_type', 'i_comb_type_id'], 'safe'],
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
    public function search($search, $pill, $step)
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
        $this->filterSteps($query, $step);
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
                $query->andFilterWhere(['check1' => 2, 'deleted' => 0]);
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

    public function filterSteps($query, $step) {
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
                $query->andFilterWhere(['check2' => 2, 'check3' => 1, 'check4' => 2]);
                break;
            case 7:
                $query->andFilterWhere(['check2' => 2, 'check3' => 1, 'check4' => 3]);
                break;
            case 8:
                $query->andFilterWhere(['check2' => 2, 'check3' => 2, 'check4' => 3]);
                break;
        }
    }
}
