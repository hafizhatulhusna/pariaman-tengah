<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;

$imageRoot = Yii::getAlias('@root');
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>
<section class="section mt-none section-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<h2>Berita <strong> Pariaman Tengah</strong></h2>
			</div>
		</div>
		<div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 4}}, 'items': 4, 'margin': 10, 'loop': false, 'nav': false, 'dots': true}">
				<?php 
					$beritaparteng = Posting::find()
								-> where(['homepage_kategori'=>10])
					            -> andWhere(['posting_status'=>1])
					            -> orderBy(['posting_id'=>SORT_ASC])
					            -> all();

					foreach ($beritaparteng as $row) {
			 	?>
					<div>
						<div class="recent-posts">
							<img class="img-responsive" src="<?= $imageRoot.$row->posting_image_utama ?>" alt="<?= $row->posting_judul ?>" style="width: 300px; height: 300px">
							<!-- <img class="img-responsive" src="img/blog/blog-vintage-1.jpg" alt="Blog"> -->
							<div class="recent-posts mt-md mb-lg">
								<article class="post">
									<h5>
										<?= Html::a($row->posting_judul, ['detail-berita', 'posting_id' => $row->posting_id]) ?></h5>
									<p><?= substr(strip_tags($row->posting_deskripsi),0,100).'...'?></p>
									<div class="post-meta">
										<span><i class="fa fa-calendar"></i><?= $row->create_at ?></span>
										<span><i class="fa fa-user"></i> Oleh: <?= $row->authorCreate->username ?> </span>
									</div>
								</article>
							</div>

							
						</div>
					</div>
				<?php } ?>
			</div>
	</div>
</section>

