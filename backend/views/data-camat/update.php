<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataCamat */

$this->title = 'Update Data Camat: ' . $model->nama_camat;
$this->params['breadcrumbs'][] = ['label' => 'Data Camat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_camat, 'url' => ['view', 'id' => $model->id_camat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>