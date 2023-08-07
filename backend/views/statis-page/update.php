<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatisPage */

$this->title = 'Update Halaman Statis: ' . $model->nama_page;
$this->params['breadcrumbs'][] = ['label' => 'Statis Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_page, 'url' => ['view', 'id' => $model->id_page]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statis-page-update">
    <div class="box box-success">
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>


    

</div>
