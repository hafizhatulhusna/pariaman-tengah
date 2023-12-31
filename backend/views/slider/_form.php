<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

	<?php $form = ActiveForm::begin(['options'=>['encytype'=>'multipart/form-data']]); ?>

	<div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'text_utama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'text_bagian_atas')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'text_bagian_bawah')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?php
                echo $form->field($model, 'slider_upload')->widget(FileInput::classname(), [
                    'options'=>[
                        'accept' => 'image/*',
                    ],
                    'pluginOptions' => [
                       
                        'maxFileSize'=>2024,
                        'showCaption' => false,
                        'showRemove' => true,
                        'showUpload' => true,
                        'browseOnZoneClick'=> true,
                        'browseClass' => 'btn btn-info',
                        'browseIcon' => '<i class="fa fa-search" aria-hidden="true"></i>',
                        'browseLabel' =>  'Cari'
                    ]
                ])->label('Gambar Slider');
            ?>
        </div>
        <div class="col-md-12">
            <div class="box-footer">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
