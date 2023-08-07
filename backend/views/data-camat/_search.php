<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataCamatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-camat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">

        <div class="col-md-3">
            <?= $form->field($model, 'nip') ?>
        </div>

        <div class="col-md-3">
            <div class="form-group" style="padding-top: 25px">
                <?= Html::submitButton('<i class="fa fa-fw fa-search"></i> Cari', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('<i class="fa fa-fw fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- <= $form->field($model, 'id_camat') ?> -->

<!-- <= $form->field($model, 'nama_camat') ?> -->



<!-- <= $form->field($model, 'gelar_depan') ?> -->

<!-- <= $form->field($model, 'gelar_belakang') ?> -->

<?php // echo $form->field($model, 'masa_jabatan') 
?>

<?php // echo $form->field($model, 'lokasi_foto') 
?>

<!-- <div class="form-group">
    <= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
</div> -->