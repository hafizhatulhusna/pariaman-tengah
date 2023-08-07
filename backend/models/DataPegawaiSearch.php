<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPegawai;

/**
 * DataPegawaiSearch represents the model behind the search form of `backend\models\DataPegawai`.
 */
class DataPegawaiSearch extends DataPegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'tempat_lahir', 'create_by', 'update_by'], 'integer'],
            [['nip', 'nama_pegawai', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'pendidikan_terakhir', 'skpd', 'satker', 'bidang', 'pangkat', 'golongan', 'jabatan', 'status_pegawai', 'lokasi_foto', 'create_at', 'update_at'], 'safe'],
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
        $query = DataPegawai::find();

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
            'id_pegawai' => $this->id_pegawai,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_pegawai', $this->nama_pegawai])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pendidikan_terakhir', $this->pendidikan_terakhir])
            ->andFilterWhere(['like', 'skpd', $this->skpd])
            ->andFilterWhere(['like', 'satker', $this->satker])
            ->andFilterWhere(['like', 'bidang', $this->bidang])
            ->andFilterWhere(['like', 'pangkat', $this->pangkat])
            ->andFilterWhere(['like', 'golongan', $this->golongan])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'status_pegawai', $this->status_pegawai])
            ->andFilterWhere(['like', 'lokasi_foto', $this->lokasi_foto]);

        return $dataProvider;
    }
}
