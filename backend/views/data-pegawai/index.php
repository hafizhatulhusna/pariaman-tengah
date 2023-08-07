<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataPegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pegawai-index">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_pegawai',
                            // 'nama_pegawai',// 'nip',
                            [
                                'attribute' => 'nip',
                                'label' => 'NIP/Nama',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $nip = $model->nip;
                                    $nama_pgw = $model->nama_pegawai;
                                    return 'NIP : ' . '<b>' . $nip . '</b>' . '<br>' . 'Nama Pegawai: ' . '<b>' . $nama_pgw . '</b>';
                                }
                            ],

                            // 'jenis_kelamin',
                            // [
                            //     'attribute' => 'tempat_lahir',
                            //     'label' => 'Tempat/Tanggal Lahir',
                            //     'value' => function ($model) {
                            //         $tempat = $model->tempat_lahir;
                            //         $tanggal = $model->tglIndo($model->tanggal_lahir);


                            //         return $tempat . ', ' . $tanggal;
                            //     }
                            // ],
                            // 'tempat_lahir',
                            // 'tanggal_lahir',
                            //'alamat:ntext',
                            // 'pendidikan_terakhir',
                            // 'skpd',
                            [
                                'attribute' => 'skpd',
                                'label' => 'Kode SKPD',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $skpd = $model->skpd;
                                    return $skpd;
                                }
                            ],
                            // 'satker',
                            [
                                'attribute' => 'satker',
                                'label' => 'Kode Satuan Kerja',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $satker = $model->satker;
                                    return $satker;
                                }
                            ],
                            // 'bidang',
                            [
                                'attribute' => 'bidang',
                                'label' => 'Bidang',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $bidang = $model->bidang;
                                    return $bidang;
                                }
                            ],
                            // 'pangkat',
                            // 'golongan',
                            // 'jabatan',
                            // 'status_pegawai',
                            [
                                'attribute' => 'status_pegawai',
                                'label' => 'Status Aktif',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $status_pegawai = $model->status_pegawai;
                                    return $status_pegawai;
                                }
                            ],
                            //'lokasi_foto',
                            //'create_at',
                            //'update_at',
                            //'create_by',
                            //'update_by',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>