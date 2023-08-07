<?php

use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\DataPegawai;

$imageRoot = Yii::getAlias('@root');


?>

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pegawai Kecamatan Pariaman Tengah</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
        </ul>

        <div class="row">

            <div class="sort-destination-loader sort-destination-loader-loaded">
                <ul class="team-list sort-destination" data-sort-id="team" data-filter="*" style="position: relative; height: 800px;">
                    <?php
                        $getdatapegawai = DataPegawai::find()
                            ->all();
                        foreach ($getdatapegawai as $row) {
                    ?>
                     

                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item leadership" style="position: absolute; left: 0px; top: 0px;">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="<?= Url::to('@root/' . $row->lokasi_foto, ['class' => 'img-fluid', 'style' => 'max-height:80px;min-height:40px;widht:auto']); ?> " class="img-responsive" alt="">
                                    <!-- <img src="img/team/team-1.jpg" class="img-responsive" alt=""> -->
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner"><?= $row->nama_pegawai ?></span>
                                        <span class="thumb-info-type"><?= $row->jabatan ?></span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    
                    <?php } ?>
                </ul>
            <div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>

        </div>

    </div>

</div>