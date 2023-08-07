<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPegawai */

$this->title = 'Update Data Pegawai: ' . $model->nama_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pegawai-update">
    <div class="box box-primary">
        <div class="box-body">
        	<?= $this->render('_form', [
    	        'model' => $model,
    	    ]) ?>
        </div>
    </div>

</div>