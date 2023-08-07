<?php 
use yii\helpers\Html;
use yii\helpers\Url;

use backend\models\Posting;

$authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?= $model->posting_judul ?></h1>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="blog-posts single-post">
				<article class="post post-large blog-single-post">
					<div class="post-image">
						<img class="img-responsive" src="<?= Url::to('@root'.$model->posting_image_utama.'')?>" alt="">
					</div>

					<div class="post-date">
						<span class="day"><?= date('d',strtotime($model->create_at)) ?></span>
						<span class="month"><?= date('F',strtotime($model->create_at)) ?></span>
					</div>


					<div class="post-content">

						<h2><?= $model->posting_judul ?></h2>

						<div class="post-meta">
							<span><i class="fa fa-user"></i> Oleh: <?= $authorCreate ?> </span>
						</div>

						<p><?= $model->posting_deskripsi ?> </p>

						<div class="post-block post-author clearfix">
							<h3 class="heading-primary"><i class="fa fa-user"></i>Author</h3>
							<!-- <div class="img-thumbnail">
								<img src="img/avatars/avatar.jpg" alt="">
							</div> -->
							<p><strong class="name"><?= $authorCreate ?></strong></p>
						</div>
					</div>
				</article>
			</div>
		</div>

		<div class="col-md-3">
			<aside class="sidebar">
			
				<h4 class="heading-primary">Tahun Berita</h4>
				<ul class="nav nav-list mb-xlg">
					<li><a href="#">2022</a></li>
				</ul>
			</aside>
		</div>
	</div>
</div>
