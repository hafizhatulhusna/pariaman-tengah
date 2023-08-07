<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KirimPesanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kirim-pesan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pesan') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_hp') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'tanggal_kirim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
