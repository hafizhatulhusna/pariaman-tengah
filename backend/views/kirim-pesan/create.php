<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KirimPesan */

$this->title = 'Create Kirim Pesan';
$this->params['breadcrumbs'][] = ['label' => 'Kirim Pesan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kirim-pesan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>