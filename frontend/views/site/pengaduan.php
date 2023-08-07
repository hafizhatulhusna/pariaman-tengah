<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\DataInstansi;


$this->title = 'Layanan Pengaduan';
$instansi = DataInstansi::find()->one();
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Pengaduan</h1>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-6">

			<?php 
			    if ($flash = Yii::$app->session->getFlash("success")): ?>
			        <div class="alert alert-success alert-dismissible">
			            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			            <h5><i class="fa fa-check-square-o" aria-hidden="true"></i><?= $flash ?></h5>
			        </div>

			        <div class="alert alert-success hidden mt-lg" id="contactSuccess">
						<strong>Berhasil</strong> <?= $flash ?>
					</div>

			<?php endif; ?>

			<h2 class="mb-sm mt-sm"><strong>Kirimkan </strong>Pesan</h2>
			<?php $form = ActiveForm::begin([
				'id'=>'contactForm'
			]); ?>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6">
							<?= $form->field($model, 'nama')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Ketikan nama']) ?>
						</div>
						<div class="col-md-6">
							<?= $form->field($model, 'no_hp')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Ketikan No.HP anda']) ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-8">
							<?= $form->field($model, 'email')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'isikan alamat email aktif']) ?>
						</div>
						<div class="col-md-4">
							<?= $form->field($model, 'tanggal_kirim')->textInput(['maxlength' => true,'class'=>'form-control','readOnly'=>true]) ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<?= $form->field($model, 'deskripsi')->textarea(['rows' => 6])->textInput(['class'=>'form-control','placeholder'=>'ketik deskripsi anda']) ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						 <?= Html::submitButton('<i class="fa fa-send" aria-hidden="true"></i> Kirim Pesan', ['class' => 'btn btn-primary btn-lg mb-xlg']) ?>
					</div>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
		<div class="col-md-6">

			<h4 class="heading-primary mt-lg"><strong><?= $instansi->nama_upt ?></strong></h4>
			<p>Dinas merupakan unsur pelaksana urusan pemerintahan di bidang Pendidikan, Dinas dipimpin oleh Kepala Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Wali Kota melalui Sekretaris Daerah. Membantu Wali Kota melaksanakan urusan pemerintahan yang menjadi kewenangan Pemerintah Kota di bidang Pendidikan serta tugas pembantuan. </p>

			<hr>

			<h4 class="heading-primary">Alamat <strong>Kantor</strong></h4>
			<ul class="list list-icons list-icons-style-3 mt-xlg">
				<li><i class="fa fa-map-marker"></i> <strong>Alamat:</strong> <?= $instansi->alamat_upt ?></li>
				<li><i class="fa fa-phone"></i> <strong>Telpon:</strong> <?= $instansi->no_wa ?></li>
				<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <?= $instansi->email ?></li>
			</ul>

			<hr>

			<h4 class="heading-primary">Jadwal <strong>Kerja</strong></h4>
			<ul class="list list-icons list-dark mt-xlg">
				<li><i class="fa fa-clock-o"></i> Senin - Kamis - 07:30 s/d 16:00</li>
				<li><i class="fa fa-clock-o"></i> Jumat - 07:30 s/d 16:30</li>
			</ul>

		</div>

	</div>

</div>