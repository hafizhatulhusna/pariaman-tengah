<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_camat".
 *
 * @property int $id_camat
 * @property string $nama_camat
 * @property string $nip
 * @property string|null $gelar_depan
 * @property string|null $gelar_belakang
 * @property string $masa_jabatan
 * @property string|null $lokasi_foto
 */
class DataCamat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_camat';
    }

    /**
     * {@inheritdoc}
     */
    public $foto_camat;
    public function rules()
    {
        return [
            [['nama_camat', 'nip', 'masa_jabatan'], 'required'],
            [['id_camat'], 'integer'],
            [['nama_camat'], 'string', 'max' => 50],
            [['nip'], 'string', 'max' => 16],
            [['gelar_depan', 'gelar_belakang'], 'string', 'max' => 10],
            [['masa_jabatan'], 'string', 'max' => 30],
            [['lokasi_foto'], 'string', 'max' => 255],
            [['id_camat'], 'unique'],
            [['foto_camat',], 'required', 'on' => ['create']],  //ini wajib diisi saat create
            [
                'foto_camat', 'file', 'extensions' => ['jpg', 'png', 'JPEG', 'JPG'],  //ini extensin gambar yg kita iziznin upload
                'maxSize' => 500 * 1024,
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format gambar {extensions}  yang diizinkan untuk {attribute}.', //ini pesan yg muncul saat upload tidak sesuai tipe gambar

            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_camat' => 'Id Camat',
            'nama_camat' => 'Nama Camat',
            'nip' => 'Nip',
            'gelar_depan' => 'Gelar Depan',
            'gelar_belakang' => 'Gelar Belakang',
            'masa_jabatan' => 'Masa Jabatan',
            'lokasi_foto' => 'Lokasi Foto',
        ];
    }
}
