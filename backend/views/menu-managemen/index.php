<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\form\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuManagemenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-managemen-index">
    <div class="row">
        <div class="col-md-12"> 
            <div class="box box-primary"> 
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                    <br>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                
                            // 'menu_id',
                            // 'menu_parent',
                            [
                                'attribute' => 'menu_parent',
                                'value' => function ($model) {
                                    return $model->dataParent ? $model->dataParent->menu_nama : '-';
                                }
                            ],
                            'menu_nama',
                            'menu_type',
                            // 'menu_item',
                            [
                                'attribute' => 'menu_item',
                                'label' => 'Posting Judul',
                                'value' => function ($model) {
                                    return $model->dataPosting ? $model->dataPosting->posting_judul : '-';
                                }
                            ],
                            'menu_order',
                            'menu_status',
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>

</div>