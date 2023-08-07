<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Tampilan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">
    <div class="row">
        <div class="col-md-12"> 
            <div class="box box-primary"> 
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'contentOptions' => ['style' => 'width:6%; white-space: normal;']
                            ],
                
                            // 'kategori_id',
                            'kategori_nama',
                            // 'kategori_status',
                             [
                                'attribute' => 'kategori_status',
                                'format'=>'html', 
                                // 'contentOptions' => ['style' => 'width:30%; white-space: normal;'],
                                'label'=>'Status',
                                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                                'value'=>function($model){
                                    $color =$model->kategori_status;
                                    if ($color == 1) {
                                       $status = '<span class="badge badge-pill badge-success">Aktif</span>';
                                    } elseif ($color == 2) {
                                        $status = '<span class="badge badge-pill badge-warning">Tidak Aktif</span>';
                                    } 
                                    return $status;
                                },
                            ],
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>

    

</div>
