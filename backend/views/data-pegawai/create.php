<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPegawai */

$this->title = 'Tambah Data Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="data-pegawai-create">
    <div class="box box-success">
        <div class="box-body">
        	<?= $this->render('_form', [
    	        'model' => $model,
    	    ]) ?>
        </div>
    </div>

</div>