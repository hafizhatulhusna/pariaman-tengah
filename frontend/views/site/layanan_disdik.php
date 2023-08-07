<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;

$imageRoot = Yii::getAlias('@root');
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>
<section class="section mt-none section-footer">
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-12 center">
				<h2>Jenis Layanan <strong> PARIAMAN TENGAH</strong></h2>
			</div>
		</div> -->
		<h2><strong>Pelayanan </strong>Kami</h2>

		<div class="row">
			<div class="col-md-10">
				<p class="lead">
					Berikut daftar layanan publik yang kami sediakan. Dengan memberikan layanan terbaik dalam untuk masyarakat dengan dilengkapi berbagai persyaratan untuk penunjang layanan.</i>
				</p>
			</div>
			<div class="col-md-2">
				<?= Html::a('Layanan Lainnya <i class="fa fa-arrow-right"></i>', ['all-service'], ['class' => 'btn btn-borders btn-primary btn-lg']) ?>
			</div>
		</div>
		<div class="featured-boxes">
			<div>
				<?php 
					$layanandidik = Posting::find()
								-> where(['homepage_kategori'=>4])//kategori tampilan untuk layana kami
					            -> andWhere(['posting_category'=>16]) //posting kategori untuk layanan kami
					            -> orderBy(['posting_id'=>SORT_ASC])
					            -> limit(4)
					            -> all();

					foreach ($layanandidik as $row) {
			 	?>
			 		<div class="col-md-3">
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
</section>

