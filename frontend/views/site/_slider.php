<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */



?>

<section class="hero hero-slider-wrapper">
    <div class="hero-slider">
        <div class="slide"> <img src="<?= Url::to('images/slider/1.jpg')?>" alt="">
            <div class="title" style=" border: 5px solid; padding: 10px; box-shadow: 5px 10px #c5c5c5; background-color: #000; color: #fff; opacity: .9; width: 1500px; position: center">
                <h1> E-KINERJA <small style="text-transform: lowercase;"><i>terintegrasi</i></small></h1>
                <span>Dapat Merekap Data Kehadiran Pegawai</span>
            </div>
        </div>
        <div class="slide"> <img src="<?= Url::to('images/slider/2.jpg')?>" alt="">
            <div class="title" style=" border: 5px solid; padding: 10px; box-shadow: 5px 10px #c5c5c5; background-color: #000; color: #fff; opacity: .9;">
                <h1> E-KINERJA <small style="text-transform: lowercase;"><i>terintegrasi</i></small></h1>
                <span>Dapat Mengetahui Kinerja Pegawai</span>
            </div>
        </div>
        <div class="slide"> <img src="<?= Url::to('images/slider/3.jpg')?>" alt="">
            <div class="title" style=" border: 5px solid; padding: 10px; box-shadow: 5px 10px #c5c5c5; background-color: #000; color: #fff; opacity: .9;">
                <h1> E-KINERJA <small style="text-transform: lowercase;"><i>terintegrasi</i></small></h1>
                <span>Dapat Mengetahui Informasi Perolehan TPP ASN</span>
            </div>
        </div>
    </div>
</section>