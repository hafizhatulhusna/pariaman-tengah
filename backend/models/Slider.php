<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $slider_id
 * @property string $slider_image
 * @property string $slider_title
 * @property string $slider_h1
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public $slider_upload;

    public function rules()
    {
        return [
            [['slider_image'], 'required'],
            [['slider_image'], 'string', 'max' => 255],
            [['text_utama', 'text_bagian_atas','text_bagian_bawah'], 'string', 'max' => 100],

            [['slider_upload',],'required','on'=>['create']],  //ini wajib diisi saat create
            ['slider_upload', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],  //ini extensin gambar yg kita iziznin upload
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
            'slider_id' => 'Slider ID',
            'slider_image' => 'Slider Image',
            'text_utama' => 'Tulisan Utama',
            'text_bagian_atas' => 'Tulisan Bagian Atas',
            'text_bagian_bawah' => 'Tulisan Bagian Bawah',
            'slider_upload' => 'Gambar'
        ];
    }

    public function getDataSlider(){
        $slide = Slider::find()
            -> orderBy(['slider_id'=>SORT_ASC])
            -> all();
        return $slide;
    }

   
}
