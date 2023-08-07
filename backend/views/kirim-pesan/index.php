<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KirimPesanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kirim Pesan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kirim-pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kirim Pesan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pesan',
            'nama',
            'no_hp',
            'email:email',
            'deskripsi:ntext',
            //'tanggal_kirim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>