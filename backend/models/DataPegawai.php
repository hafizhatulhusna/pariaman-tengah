<?php

namespace backend\models;

use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "data_pegawai".
 *
 * @property int $id_pegawai
 * @property string|null $nip
 * @property string $nama_pegawai
 * @property string $jenis_kelamin
 * @property int $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $pendidikan_terakhir
 * @property string $skpd
 * @property string $satker
 * @property string $bidang
 * @property string $pangkat
 * @property string $golongan
 * @property string $jabatan
 * @property string $status_pegawai
 * @property string|null $lokasi_foto
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $create_by
 * @property int|null $update_by
 */
class DataPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public $upload_foto;
    public function rules()
    {
        return [
            [['nama_pegawai', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'pendidikan_terakhir', 'skpd', 'satker', 'bidang', 'pangkat', 'golongan', 'jabatan', 'status_pegawai'], 'required'],
            [['create_by', 'update_by'], 'integer'],
            [['tanggal_lahir', 'create_at', 'update_at',], 'safe'],
            [['alamat'], 'string'],
            [['nip', 'pangkat'], 'string', 'max' => 20],
            [['nama_pegawai'], 'string', 'max' => 50],
            [['jenis_kelamin', 'status_pegawai'], 'string', 'max' => 10],
            [['pendidikan_terakhir', 'skpd', 'satker', 'bidang', 'tempat_lahir'], 'string', 'max' => 100],
            [['golongan'], 'string', 'max' => 5],
            [['jabatan'], 'string', 'max' => 200],
            [['lokasi_foto'], 'string', 'max' => 250],

            [['upload_foto',], 'required', 'on' => ['create']],  //ini wajib diisi saat create
            [
                'upload_foto', 'file', 'extensions' => ['jpg', 'png', 'JPEG', 'JPG'],  //ini extensin gambar yg kita iziznin upload
                //'maxSize' => 1024 * 1024 * 4, 
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
            'id_pegawai' => 'Id Pegawai',
            'nip' => 'NIP',
            'nama_pegawai' => 'Nama Pegawai',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'pendidikan_terakhir' => 'Pendidikan Terakhir',
            'skpd' => 'SKPD',
            'satker' => 'SATKER',
            'bidang' => 'Bidang',
            'pangkat' => 'Pangkat',
            'golongan' => 'Golongan',
            'jabatan' => 'Jabatan',
            'status_pegawai' => 'Status Pegawai',
            'lokasi_foto' => 'Lokasi Foto',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }

    public function tglIndo($tanggal_lahir)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );

        $pecahkan = explode('-', $tanggal_lahir);

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }

    public function getDataPegawai()
    {
        $queryMenu = DataPegawai::find()
            // ->where(['menu_parent'=>null])
            // ->andWhere(['menu_status'=>1])
            // ->orderBy(['menu_order'=>SORT_ASC])
            // ->limit(6)
            ->all();
        return $queryMenu;
    }
    public function getTampilNamaNipPegawai()
    {
        return ' Ketik Nama : (' . $this->nama_pegawai . ')' . ' NIP Pegawai: (' . $this->nip . ')';
    }
    public function getdatakasus()
    {
        $pegawai = ArrayHelper::map(DataPegawai::find()
            ->orderBy(['id_pegawai' => SORT_DESC])
            ->all(), 'id_pegawai', 'tampilannamanippegawai');
        return $pegawai;
    }
}
