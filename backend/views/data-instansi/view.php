<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansi */

$this->title = $model->nama_upt;
$this->params['breadcrumbs'][] = ['label' => 'Data Instansi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-instansi-view">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $model->nama_upt; ?>
                    </h3>
                    <div class="box-tools pull-right">

                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="box-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'nama_upt',
                            'alamat_upt:ntext',
                            'telp',
                            'no_wa',
                            'email:email',
                            'website',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

</div>