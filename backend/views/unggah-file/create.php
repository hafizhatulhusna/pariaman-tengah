<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFile */

$this->title = Yii::t('app', 'Tambah Unggahan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unggah Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unggah-file-create">

    <div class="box box-success">
        <div class="box-body">
        	<?= $this->render('_form', [
    	        'model' => $model,
    	    ]) ?>
        </div>
    </div>

</div>
