<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Slider;

/**
 * SliderSearch represents the model behind the search form of `backend\models\Slider`.
 */
class SliderSearch extends Slider
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slider_id'], 'integer'],
            [['slider_image', 'text_utama', 'text_bagian_atas','text_bagian_bawah'], 'safe'],
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
        $query = Slider::find();

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
            'slider_id' => $this->slider_id,
        ]);

        $query->andFilterWhere(['like', 'slider_image', $this->slider_image])
            ->andFilterWhere(['like', 'text_utama', $this->text_utama])
            ->andFilterWhere(['like', 'text_bagian_atas', $this->text_bagian_atas])
            ->andFilterWhere(['like', 'text_bagian_bawah', $this->text_bagian_bawah]);

        return $dataProvider;
    }
}
