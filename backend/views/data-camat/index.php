<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataCamatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Camat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-camat-index">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->
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

                            // 'id_camat',
                            // 'nama_camat',
                            // 'nip',
                            [
                                'attribute' => 'nip',
                                'label' => 'NIP/Nama Camat',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    $nip = $model->nip;
                                    $nama_cmt = $model->nama_camat;
                                    return 'NIP : ' . '<b>' . $nip . '</b>' . '<br>' . 'Nama Camat: ' . '<b>' . $nama_cmt . '</b>';
                                }
                            ],
                            'gelar_depan',
                            'gelar_belakang',
                            'masa_jabatan',
                            //'lokasi_foto',
                            [
                                'attribute' => 'lokasi_foto',
                                'format' => 'html',
                                'label' => 'Gambar Utama',
                                'value' => function ($model) {
                                    $root_folder = Yii::getAlias('@root');
                                    $gambar = Html::img($root_folder . $model->lokasi_foto, ['height' => 40]);
                                    return $gambar;
                                }
                            ],

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>