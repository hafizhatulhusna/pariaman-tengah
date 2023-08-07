<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataCamat */

$this->title = 'Tambah Data Camat';
$this->params['breadcrumbs'][] = ['label' => 'Data Camat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>