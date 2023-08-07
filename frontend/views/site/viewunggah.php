<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\UnggahFile;
use backend\models\Posting;
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tupoksi</h1>
            </div>
        </div>
    </div>
</section>

    <div class="container">
                
        <div class="row">
            <div class="col-md-12">

                <!--<h4>Standar Pelayanan Kecamatan Pariaman Tengah</h4>-->

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Unggahan</th>
                            <th>Pelayanan</th>
                            <th>Unggahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $getstandarpel = (new UnggahFile)->getListUnggah();
                            foreach ($getstandarpel as $row) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <?php
                                    if ($row->jenis_unggah==1){
                                        echo "Dokumen";
                                    } elseif ($row->jenis_unggah==2){
                                        echo "Aplikasi";
                                    }
                                ?>
                            </td>
                            <td>
                                <?= $row->nama_unggah ?>
                            </td>
                            <td>
                                <?php
                                    if ($row->jenis_unggah==1){
                                        echo Html::a('<i class="fa fa-download" aria-hidden="true"></i> Download', Url::to('@root'.$row->lokasi_unggah),['target'=>'_blank'],['class'=>'btn mb-3 btn-success']);
                                    } elseif ($row->jenis_unggah==2){
                                        echo Html::a('<i class="fa fa-download" aria-hidden="true"></i> Menuju Link', Url::to('@root'.$row->alamat_url),['target'=>'_blank'],['class'=>'btn mb-3 btn-primary']);
                                    }
                                ?>
                                <?php // = $row->upload_file ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <hr class="tall">

            </div>
        </div>

    </div>