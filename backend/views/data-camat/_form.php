<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\DataCamat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-camat-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nama_camat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gelar_depan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
            
             <?= $form->field($model, 'gelar_belakang')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'masa_jabatan')->textInput(['maxlength' => true]) ?>
            <!-- <= $form->field($model, 'lokasi_foto')->textInput(['maxlength' => true]) ?> -->
        </div>

        <div class="col-sm-6">
           
            <?php
            echo $form->field($model, 'foto_camat')->widget(FileInput::classname(), [
                'options' => [
                    'accept' => 'image/*',
                ],
                'pluginOptions' => [

                    'maxFileSize' => 2024,
                    'showCaption' => false,
                    'showRemove' => true,
                    'showUpload' => true,
                    'browseOnZoneClick' => true,
                    'browseClass' => 'btn btn-info',
                    'browseIcon' => '<i class="fa fa-search" aria-hidden="true"></i>',
                    'browseLabel' =>  'Cari'
                ]
            ])->label('Gambar Camat');
            ?>
        </div>
    </div>

    <!-- <= $form->field($model, 'id_camat')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>