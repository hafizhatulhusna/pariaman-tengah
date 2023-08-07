<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;

$imageRoot = Yii::getAlias('@root');
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Layanan Pariaman Tengah</h1>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="featured-boxes">
		<div class="row">
			<?php 
				$layanandidik = Posting::find()
							-> where(['homepage_kategori'=>4])//kategori tampilan untuk layana kami
				            -> andWhere(['posting_category'=>16]) //posting kategori untuk layanan kami
				            -> orderBy(['posting_id'=>SORT_ASC])
				            -> all();

				foreach ($layanandidik as $row) {
		 	?>
				<div class="col-md-3 col-sm-6">
					<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
						<div class="box-content">
							<center><img class="img-responsive" src="<?= $imageRoot.$row->posting_icon ?>" alt="" style="width: 100px; height: 100px"></center><br>
							<h4 class="text-uppercase"><?= $row->posting_judul ?></h4>
							<p><?= substr(strip_tags($row->posting_deskripsi),0,100).'...'?></p>
							<p>
								<?= Html::a('Selengkapnya <i class="fa fa-arrow-right"></i>', ['detail-posting', 'posting_id' => $row->posting_id], ['class' => 'lnk-primary learn-more']) ?>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>