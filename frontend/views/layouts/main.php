
<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
// use frontend\assets\AppAsset;
use frontend\assets\FrontendAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Website Kecamatan Pariaman Tengah Kota Pariaman</title>
    <?php $this->head() ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/pariamanlogo.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
</head>
<body class="theme-green">
    <div class="body">
    
        <?php $this->beginBody() ?>

            <?= $this->render('header.php') ?>

            <div role="main" class="main">

                <?= $content ?>
            </div>

            <?php echo $this->render('footer.php') ?>

        <?php $this->endBody() ?>

    </div>
</body>
</html>
<?php $this->endPage();
