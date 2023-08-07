<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataCamat;

/**
 * DataCamatSearch represents the model behind the search form of `backend\models\DataCamat`.
 */
class DataCamatSearch extends DataCamat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_camat'], 'integer'],
            [['nama_camat', 'nip', 'gelar_depan', 'gelar_belakang', 'masa_jabatan', 'lokasi_foto'], 'safe'],
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
        $query = DataCamat::find();

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
            'id_camat' => $this->id_camat,
        ]);

        $query->andFilterWhere(['like', 'nama_camat', $this->nama_camat])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'gelar_depan', $this->gelar_depan])
            ->andFilterWhere(['like', 'gelar_belakang', $this->gelar_belakang])
            ->andFilterWhere(['like', 'masa_jabatan', $this->masa_jabatan])
            ->andFilterWhere(['like', 'lokasi_foto', $this->lokasi_foto]);

        return $dataProvider;
    }
}
