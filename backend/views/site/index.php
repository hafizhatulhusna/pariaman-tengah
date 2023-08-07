<?php

/* @var $this yii\web\View */

use backend\models\DataCamat;
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\DataOpd;
use backend\models\DataPegawai;
use backend\models\Setting;
use backend\models\Mstpegawai;
use backend\models\Pegawainonpns;
use backend\models\Posting;
use backend\models\SkpdTbl;
use backend\models\UnggahFile;

$imgPath = Yii::getAlias('@root') . '/images';
$imgPathfront = Yii::getAlias('@root') . '/imagesfrontend';
$root_folder = Yii::getAlias('@root');

// $getprofilopd = DataOpd::find()-> one();
// $opd_upt = $getprofilopd->nama_opd;

// $skpd = (new Setting)->find()->where(['nama_setting'=>'SKPD'])->one();
// $KDSKPD = $skpd->nilai_setting;
// $getSkpd = (new SkpdTbl)->find()->where(['KDSKPD'=>$KDSKPD])->one();

// $nama_web = $getSkpd ? $getSkpd->NMSKPD : 'Nama SKPD Tidak Ada';




$this->title =  'HALAMAN ADMIN WEBSITE KECAMATAN PARIAMAN TENGAH KOTA PARIAMAN';
?>

<div class="site-index">
    <div class="row">
        <?php
        $data_pegawai = DataPegawai::find()->count();
        $data_camat = DataCamat::find()->count();
        $data_manajemen_posting = Posting::find()->count();
        $unggahan_dokumen = UnggahFile::find()->count();
        ?>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= $data_pegawai ?></h3>
                    <p>Total Data Pegawai</p>
                </div>
                <div class="icon">
                    <i class="fa fa-group"></i>
                </div>
                <a href="data-pegawai" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?= $data_camat ?></h3>
                    <p>Data Camat </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="data-camat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?= $data_manajemen_posting ?></h3>
                    <p>Data Manajemen Posting</p>
                </div>
                <div class="icon">
                    <i class="fa fa-folder-open"></i>
                </div>
                <a href="posting" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $unggahan_dokumen ?></h3>
                    <p>Data Unggahan Dokumen</p>
                </div>
                <div class="icon">
                    <i class="fa fa-folders"></i>
                </div>
                <a href="unggah-file" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>