<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$route = Yii::$app->controller->getRoute();
if($route === 'site/login' || $route === 'site/signup') {
    AppAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
        $this->head();
        if($route !== 'site/login' || $route !== 'site/signup') {
    ?>
            <!-- Fontfaces CSS-->
            <link href="cool-assets/css/font-face.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

            <!-- Bootstrap CSS-->
            <link href="cool-assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

            <!-- Vendor CSS-->
            <link href="cool-assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/wow/animate.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/slick/slick.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
            <link href="cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

            <!-- Main CSS-->
            <link href="cool-assets/css/theme.css" rel="stylesheet" media="all">
    <?php
        }
    ?>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
<?php $this->beginBody() ?>

<div class="">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<?php if($route !== 'site/login' || $route !== 'site/signup') { ?>
    <!-- Jquery JS-->
    <script src="cool-assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="cool-assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="cool-assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="cool-assets/vendor/slick/slick.min.js">
    </script>
    <script src="cool-assets/vendor/wow/wow.min.js"></script>
    <script src="cool-assets/vendor/animsition/animsition.min.js"></script>
    <script src="cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="cool-assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="cool-assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="cool-assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="cool-assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="cool-assets/vendor/select2/select2.min.js">
    </script>
<?php } ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
