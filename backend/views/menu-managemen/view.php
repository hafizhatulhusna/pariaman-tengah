<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManagemen */

$this->title = $model->menu_nama;
$this->params['breadcrumbs'][] = ['label' => 'Menu Managemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-managemen-view">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $model->menu_nama; ?>
                    </h3>
                    <div class="box-tools pull-right">

                        <?= Html::a('Update', ['update', 'id' => $model->menu_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->menu_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="box-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'menu_id',
                            'menu_parent',
                            'menu_nama',
                            'menu_type',
                            'menu_item',
                            'menu_order',
                            'menu_status',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
