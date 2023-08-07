<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kirim_pesan".
 *
 * @property int $id_pesan
 * @property string $nama
 * @property string $no_hp
 * @property string $email
 * @property string $deskripsi
 * @property string|null $tanggal_kirim
 */
class KirimPesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kirim_pesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'email', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['tanggal_kirim'], 'safe'],
            [['nama'], 'string', 'max' => 100],
            [['no_hp'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesan' => 'Id Pesan',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'deskripsi' => 'Deskripsi',
            'tanggal_kirim' => 'Tanggal Kirim',
        ];
    }
}
