<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KirimPesan */

$this->title = 'Update Kirim Pesan: ' . $model->id_pesan;
$this->params['breadcrumbs'][] = ['label' => 'Kirim Pesan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pesan, 'url' => ['view', 'id' => $model->id_pesan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kirim-pesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>