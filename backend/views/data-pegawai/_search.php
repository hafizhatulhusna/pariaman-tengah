<?php

use backend\models\DataPegawai;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\DataPegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'nip') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'nama_pegawai') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'bidang') ?>
        </div>
        <div class="col-sm-3">
            <div class="form-group" style="padding-top: 25px">
                <?= Html::submitButton('<i class="fa fa-fw fa-search"></i> Cari', ['class' => 'btn btn-info']) ?>
                <?= Html::a('<i class="fa fa-fw fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>

</div>