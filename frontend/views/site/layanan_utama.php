<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;
?>
<section class="section m-none">
	<div class="container">
		<div class="row">
			<<div class="heading heading-border heading-middle-border heading-middle-border-center center">
				<h2>Program <span class="inverted">Unggulan</span> Kami</h2>
			</div>
		</div>
		<div class="row mt-lg">
			<?php 
				$layanan = Posting::find()
						-> where(['homepage_kategori'=>9]) //kategori untuk layanan utama
			            -> andWhere(['posting_category'=>13]) //kagori posting untuk layanan utama
			            -> all();

			    foreach ($layanan as $row) {
			    	
			?>
				
				<div class="col-md-3 col-sm-6">
					<div class="featured-box featured-box-primary featured-box-effect-1" style="height: 384.8px;">
						<div class="box-content">
							<center><img class="img-responsive mb-lg" width="120px" height="60px" src="<?= Url::to('@root'.$row->posting_icon.'')?>" alt=""></center>
							<h4><?= $row->posting_judul ?></h4>
							<p><?= substr(strip_tags($row->posting_deskripsi),0,100).'...'?></p>
							<p>
								<?= Html::a('Selengkapnya <i class="fa fa-arrow-right"></i>', ['detail-posting', 'posting_id' => $row->posting_id], ['class' => 'btn-flat btn-xs']) ?>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

