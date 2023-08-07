<?php 

use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;

$imageRoot = Yii::getAlias('@root');

$sambutan = Posting::find()
			-> where(['homepage_kategori'=>3]) //kategori untuk Kata Sambuatan
            -> andWhere(['posting_category'=>12])
            -> one();			

?>

<section class="section section-no-background m-none">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive mb-lg" src="<?= $imageRoot.$sambutan->posting_image_utama ?>" alt="Kecamatan Pariaman Tengah">

				
			</div>
			<div class="col-md-9">
				<h2 class="mb-lg">Sekilas Website <strong>Kecamatan Pariaman Tengah</strong></h2>
				<p class="lead"><?= $sambutan->posting_judul ?></p>
				<p>
					<?= substr(strip_tags($sambutan->posting_deskripsi),0,300).'...' ?> 
					<?= Html::a('Selengkapnya <i class="fa fa-arrow-right"></i>', ['detail-posting', 'posting_id' => $sambutan->posting_id], ['class' => 'btn-flat btn-xs']) ?>
				</p>
			</div>
		</div>
	</div>
</section>