<?php

namespace app\modules\models;

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
            [['i_type', 'i_usg_type', 'i_comb_type_id', 'e2e_item_ru', 'e2e_i_description_ru', 'e2e_item_en', 'e2e_i_description_en', 'e2e_item_ir', 'e2e_i_description_ir'], 'safe'],
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
        $query = Items::find();

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
            'e2e_item_id' => $this->e2e_item_id,
            'item_id' => $this->item_id,
            'i_result_sector1_colorid' => $this->i_result_sector1_colorid,
            'i_result_sector2_colorid' => $this->i_result_sector2_colorid,
            'i_result_sector3_colorid' => $this->i_result_sector3_colorid,
            'i_result_sector4_colorid' => $this->i_result_sector4_colorid,
            'i_result_sector5_colorid' => $this->i_result_sector5_colorid,
            'i_result_sector6_colorid' => $this->i_result_sector6_colorid,
            'i_result_sector7_colorid' => $this->i_result_sector7_colorid,
            'i_result_sector8_colorid' => $this->i_result_sector8_colorid,
            'i_result_sector9_colorid' => $this->i_result_sector9_colorid,
            'i_result_sector10_colorid' => $this->i_result_sector10_colorid,
        ]);

        $query->andFilterWhere(['like', 'i_type', $this->i_type])
            ->andFilterWhere(['like', 'i_usg_type', $this->i_usg_type])
            ->andFilterWhere(['like', 'i_comb_type_id', $this->i_comb_type_id])
            ->andFilterWhere(['like', 'e2e_item_ru', $this->e2e_item_ru])
            ->andFilterWhere(['like', 'e2e_i_description_ru', $this->e2e_i_description_ru])
            ->andFilterWhere(['like', 'e2e_item_en', $this->e2e_item_en])
            ->andFilterWhere(['like', 'e2e_i_description_en', $this->e2e_i_description_en])
            ->andFilterWhere(['like', 'e2e_item_ir', $this->e2e_item_ir])
            ->andFilterWhere(['like', 'e2e_i_description_ir', $this->e2e_i_description_ir]);

        return $dataProvider;
    }
}
