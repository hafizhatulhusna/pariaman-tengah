<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManagemenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-managemen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'menu_id') ?>

    <?php // echo $form->field($model, 'menu_parent') ?>

    <?= $form->field($model, 'menu_nama') ?>

    <?php // echo $form->field($model, 'menu_type') ?>

    <?php // echo $form->field($model, 'menu_item') ?>

    <?php // echo $form->field($model, 'menu_order') ?>

    <?php // echo $form->field($model, 'menu_status') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
