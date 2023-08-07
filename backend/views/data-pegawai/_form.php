<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <?= $form->field($model, 'jenis_kelamin')->dropDownList(['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], ['prompt' => '--pilih--']); ?>
                </div>
                <div class="col-sm-5">
                    <?= $form->field($model, 'tempat_lahir')->textInput() ?>
                </div>
                <div class="col-sm-4">

                    <?= $form->field($model, 'tanggal_lahir')->label('Tanggal Lahir')->widget(DatePicker::classname(), [
                        'language' => 'en GB',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'showAnim' => 'clip',
                            //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                            'changeMonth' => true,
                            'changeYear' => true,
                            'yearRange' => date('Y') - 60 . ':' . (date('Y') + 5),
                        ],
                        'options' => [
                            'class' => 'form-control datepicker',
                            'placeholder' => "-- Tanggal --",
                        ],

                    ]); ?>
                </div>
            </div>

            <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'pendidikan_terakhir')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'skpd')->textInput(['maxlength' => true, 'disabled' => true]) ?>

            <?= $form->field($model, 'satker')->textInput(['maxlength' => true, 'disabled' => true]) ?>

            <?= $form->field($model, 'bidang')->dropDownList([
                '0' => '-',
                '618' . ' -- ' . 'Kelurahan Alai Gelombang' => '618' . ' -- ' . 'Kelurahan Alai Gelombang',
                '616' . ' -- ' . 'Kelurahan Jalan Baru' => '616' . ' -- ' . 'Kelurahan Jalan Baru',
                '605' . ' -- ' . 'Kelurahan Jalan Kereta Api' => '605' . ' -- ' . 'Kelurahan Jalan Kereta Api',
                '620' . ' -- ' . 'Kelurahan Jati Hilir' => '620' . ' -- ' . 'Kelurahan Jati Hilir',
                '613' . ' -- ' . 'Kelurahan Jawi-Jawi I' => '613' . ' -- ' . 'Kelurahan Jawi-Jawi I',
                '614' . ' -- ' . 'Kelurahan Jawi-Jawi II' => '614' . ' -- ' . 'Kelurahan Jawi-Jawi II',
                '610' . ' -- ' . 'Kelurahan Kampung Jawa I' => '610' . ' -- ' . 'Kelurahan Kampung Jawa I',
                '611' . ' -- ' . 'Kelurahan Kampung Jawa II' => '611' . ' -- ' . 'Kelurahan Kampung Jawa II',
                '609' . ' -- ' . 'Kelurahan Kampung Perak' => '609' . ' -- ' . 'Kelurahan Kampung Perak',
                '608' . ' -- ' . 'Kelurahan Kampung Pondok' => '608' . ' -- ' . 'Kelurahan Kampung Pondok',
                '606' . ' -- ' . 'Kelurahan Karan Aur' => '606' . ' -- ' . 'Kelurahan Karan Aur',
                '615' . ' -- ' . 'Kelurahan Lohong' => '615' . ' -- ' . 'Kelurahan Lohong',
                '612' . ' -- ' . 'Kelurahan Pasir' => '612' . ' -- ' . 'Kelurahan Pasir',
                '617' . ' -- ' . 'Kelurahan Pondok II' => '617' . ' -- ' . 'Kelurahan Pondok II',
                '619' . ' -- ' . 'Kelurahan Taratak' => '619' . ' -- ' . 'Kelurahan Taratak',
                '607' . ' -- ' . 'Kelurahan Ujung Batung' => '607' . ' -- ' . 'Kelurahan Ujung Batung',
                '265' . ' -- ' . 'Sekretariat' => '265' . ' -- ' . 'Sekretariat',
                '604' . ' -- ' . 'Seksi Kesos' => '604' . ' -- ' . 'Seksi Kesos',
                '601' . ' -- ' . 'Seksi Pemerintahan' => '601' . ' -- ' . 'Seksi Pemerintahan',
                '603' . ' -- ' . 'Seksi PMD' => '603' . ' -- ' . 'Seksi PMD',
                '602' . ' -- ' . 'Seksi TRANTIB' => '602' . ' -- ' . 'Seksi TRANTIB',

            ], ['prompt' => '--pilih--']); ?>




        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

            <?php
            echo $form->field($model, 'upload_foto')->widget(FileInput::classname(), [
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
            ])->label('Foto Pegawai');
            ?>

            <?= $form->field($model, 'status_pegawai')->dropDownList(['AKTIF' => 'AKTIF', 'TIDAK AKTIF' => 'TIDAK AKTIF'], ['prompt' => '--pilih--']); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>