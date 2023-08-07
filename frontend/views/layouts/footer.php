<?php
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\DataInstansi;
use backend\models\Posting;

$imageRoot = Yii::getAlias('@root').'/img';
?>

<footer id="footer">
    <div class="container">
        <div class="row">   
            <div class="col-md-3">
                <div class="newsletter">
                    <?php $dataInstansi = DataInstansi::find()->one(); ?>
                    <center>
                        <h4><?= $dataInstansi->nama_upt ?></h4>
                        <img alt="Dinas Pendidikan Pemuda dan Olahraga" width="140" height="150" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= $imageRoot.'/pariamanlogo.png'?>">

                    </center>
                    
                </div>
            </div>
            <div class="col-md-3">
                <h4>Berita Terbaru</h4>
                <?php  
                    $beritaopd = (new Posting)->getDataUntukBeritaFooter(); 
                        foreach ($beritaopd as $row) {
                ?>
                    <div id="tweet" class="twitter" data-plugin-tweets="" data-plugin-options="{'username': '', 'count': 2}">
                        <p><?= $row->posting_judul ?></p>
                    </div>
                    <hr>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Hubungi Kami</h4>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Alamat: </strong><?= $dataInstansi->alamat_upt ?></p></li>
                        <li><p><i class="fa fa-phone"></i> <strong>Phone/Whatsapp: </strong><?= $dataInstansi->no_wa ?></p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <?= $dataInstansi->email ?></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Follow Kami</h4>
                <ul class="social-icons">
                    <li>
                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="index.html" class="logo">
                        <img alt="DISDIKPORA" class="img-responsive" src="<?= $imageRoot.'/parteng.png'?>">
                    </a>
                </div>
                <div class="col-md-5">
                    <p>© 2023. Kecamatan Pariaman Tengah Kota Pariaman.</p>
                </div>
                <div class="col-md-6">
                    <nav id="sub-menu">
                        <ul>
                            <li>Website Powered By <a href="http://diskominfo.pariamankota.go.id">Diskominfo Kota Pariaman</a></li>
                            <li>
                                <?= Html::a('Login Admin Panel',['/public/site/index'],['target' => '_blank']) ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>