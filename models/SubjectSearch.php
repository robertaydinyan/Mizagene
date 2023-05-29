<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subject;

/**
 * SubjectSearch represents the model behind the search form of `app\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'user_id', 'year_of_birth', 'gender', 'height', 'is_me', 'status', 'copied', 'parent_id'], 'integer'],
            [['image', 'name', 'public_id', 'created_at', 'deleted_at'], 'safe'],
            [['wrist_size'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Subject::find()->where(['deleted_at' => null, 'status' => 0]);

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
            'user_id' => $this->user_id,
            'year_of_birth' => $this->year_of_birth,
            'gender' => $this->gender,
            'height' => $this->height,
            'wrist_size' => $this->wrist_size,
            'is_me' => $this->is_me,
            'status' => $this->status,
            'copied' => $this->copied,
            'parent_id' => $this->parent_id,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'public_id', $this->public_id]);

        return $dataProvider;
    }
}
