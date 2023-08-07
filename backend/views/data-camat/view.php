<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataCamat */

$this->title = $model->nama_camat;
$this->params['breadcrumbs'][] = ['label' => 'Data Camat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$root_folder = Yii::getAlias('@root'); ?>

<div class="data-camat-view">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <!-- <div class="box box-success box-solid"> -->
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $model->nama_camat; ?>
                    </h3>
                    <div class="box-tools pull-right">

                        <?= Html::a('Update', ['update', 'id' => $model->id_camat], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id_camat], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning btn-sm']) ?>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                            <!-- <tr>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    </tr> -->

                                            <tr>
                                                <td>Nama Camat</td>
                                                <td>
                                                    <?= $model->nama_camat ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>NIP Camat</td>
                                                <td>
                                                    <?= $model->nip ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gelar Depan</td>
                                                <td>
                                                    <?= $model->gelar_depan ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gelar Belakang</td>
                                                <td>
                                                    <?= $model->gelar_belakang ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Masa Jabatan</td>
                                                <td>
                                                    <?= $model->masa_jabatan ?>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Foto Camat</td>
                                                <td>
                                                    <?= Html::img($root_folder . $model->lokasi_foto, ['class' => 'img-fluid', 'style' => 'max-height:364px;min-height:340px;width:auto']); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_camat',
            'nama_camat',
            'nip',
            'gelar_depan',
            'gelar_belakang',
            'masa_jabatan',
            // 'lokasi_foto',
            [
                'attribute' => 'foto_camat',
                'label' => 'Foto Camat',
                'contentOptions' => ['style' => 'text-align:left;'],
                'filter' => false,
                'value' => function ($data) {
                    return Html::img(
                        Yii::getAlias('@web') . '/uploads/camat/' . $data['foto_camat'],
                        ['height' => '200px']
                    );
                },
            ],
        ],
    ]) ?>

</div> -->