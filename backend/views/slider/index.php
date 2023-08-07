<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Slider';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">
    <div class="row">
        <div class="col-md-12"> 
            <div class="box box-primary"> 
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                
                            // 'slider_id',
                            'slider_image',
                            'text_utama',
                            'text_bagian_atas',
                            'text_bagian_bawah',
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

</div>
