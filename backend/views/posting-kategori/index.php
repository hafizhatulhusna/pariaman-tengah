<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostingKategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Posting';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-kategori-index">
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
                
                            // 'id_kategori',
                            'nama_kategori',
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                                </div>
            </div>
        </div>
    </div>

    


</div>
