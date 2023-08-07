<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansi */

$this->title = 'Update Data Instansi: ';
$this->params['breadcrumbs'][] = ['label' => 'Data Instansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-primary">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>