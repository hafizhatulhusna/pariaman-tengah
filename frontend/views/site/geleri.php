<?php
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;
$imageRoot = Yii::getAlias('@root');
?>

<br>
<hr class="tall mb-sm">
<div class="container">
	<div class="row">
		<h2>Galeri Pariaman Tengah</h2>
	</div>
</div>

<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
	<ul class="image-gallery sort-destination full-width">
		<?php 
			$galeri = Posting::find()
						-> where(['homepage_kategori'=>6]) //kategori tampilan untuk galeri
					    -> andWhere(['posting_category'=>4]) //kategori posting galeri
					    -> andWhere(['posting_status'=>1])
			            -> orderBy(['posting_id'=>SORT_ASC])
			            -> all();

			foreach ($galeri as $row) {
	 	?>
			<li class="isotope-item">
				<div class="image-gallery-item">
					<a>
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="thumb-info-wrapper">
								<img src="<?= $imageRoot.'/'.$row->posting_image_utama ?>" style="max-height:300px;min-height:300px;width:auto" class="img-responsive" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner"><?= $row->posting_judul ?></span>
									<!--<span class="thumb-info-type">Project Type</span>-->
								</span>
							</span>
						</span>
					</a>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>

