<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataInstansiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Instansi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-instansi-index">
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
                
                            // 'id',
                            'nama_upt',
                            'alamat_upt:ntext',
                            'telp',
                            'no_wa',
                            'email:email',
                            'website',
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
   


</div>
