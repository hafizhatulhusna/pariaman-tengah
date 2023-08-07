<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPegawai */

$this->title = $model->nama_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$root_folder = Yii::getAlias('@root');
?>
<div class="data-pegawai-view">

    <p>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-info btn-sm']) ?>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
    </p>


    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?= $root_folder.$model->lokasi_foto ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?= $model->nama_pegawai ?></h3>

                        <p class="text-muted text-center"><?= $model->nip ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Jenis Kelamin</b> <a class="pull-right"><?= $model->jenis_kelamin ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tempat Lahir</b> <a class="pull-right"><?= $model->tempat_lahir ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Lahir</b> <a class="pull-right"><?= $model->tglIndo($model->tanggal_lahir); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Status Pegawai</b> <a class="pull-right"><?= $model->status_pegawai ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Pangkat/Gol</b> <a class="pull-right"><?= $model->pangkat.'/'.$model->golongan ?></a>
                            </li>
                        </ul>

                        <?= Html::a('Update', ['update', 'id' => $model->id_pegawai], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id_pegawai], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>

                
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tentang Saya</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Pendidikan Terakhir</strong>

                        <p class="text-muted">
                            <?= $model->pendidikan_terakhir ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

                        <p class="text-muted"><?= $model->alamat ?></p>

                        <hr>

                        <strong><i class="fa fa-bank margin-r-5"></i> Instansi</strong>

                        <p>
                            <b>SKPD : <i><?= $model->skpd ?></i></b> <br>
                            Bidang/UPT : <?= $model->bidang ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Jabatan</strong>

                        <p><?= $model->jabatan ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        </div>
