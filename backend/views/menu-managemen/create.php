<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManagemen */

$this->title = 'Tambah Menu ';
$this->params['breadcrumbs'][] = ['label' => 'Menu Managemen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
    <div class="box-body">
    	<?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>
</div>
