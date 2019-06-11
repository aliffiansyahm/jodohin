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
            <!-- Main Font -->
            <script src="olympus/js/webfontloader.min.js"></script>
            <script>
                WebFont.load({
                    google: {
                        families: ['Roboto:300,400,500,700:latin']
                    }
                });
            </script>

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" type="text/css" href="olympus/Bootstrap/dist/css/bootstrap-reboot.css">
            <link rel="stylesheet" type="text/css" href="olympus/Bootstrap/dist/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="olympus/Bootstrap/dist/css/bootstrap-grid.css">

            <!-- Main Styles CSS -->
            <link rel="stylesheet" type="text/css" href="olympus/css/main.min.css">
            <link rel="stylesheet" type="text/css" href="olympus/css/fonts.min.css">

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
<?php
if($route !== 'site/login' || $route !== 'site/signup') {
    ?>
    <!-- JS Scripts -->
    <script src="olympus/js/jquery-3.2.1.js"></script>
    <script src="olympus/js/jquery.appear.js"></script>
    <script src="olympus/js/jquery.mousewheel.js"></script>
    <script src="olympus/js/perfect-scrollbar.js"></script>
    <script src="olympus/js/jquery.matchHeight.js"></script>
    <script src="olympus/js/svgxuse.js"></script>
    <script src="olympus/js/imagesloaded.pkgd.js"></script>
    <script src="olympus/js/Headroom.js"></script>
    <script src="olympus/js/velocity.js"></script>
    <script src="olympus/js/ScrollMagic.js"></script>
    <script src="olympus/js/jquery.waypoints.js"></script>
    <script src="olympus/js/jquery.countTo.js"></script>
    <script src="olympus/js/popper.min.js"></script>
    <script src="olympus/js/material.min.js"></script>
    <script src="olympus/js/bootstrap-select.js"></script>
    <script src="olympus/js/smooth-scroll.js"></script>
    <script src="olympus/js/selectize.js"></script>
    <script src="olympus/js/swiper.jquery.js"></script>
    <script src="olympus/js/moment.js"></script>
    <script src="olympus/js/daterangepicker.js"></script>
    <script src="olympus/js/simplecalendar.js"></script>
    <script src="olympus/js/fullcalendar.js"></script>
    <script src="olympus/js/isotope.pkgd.js"></script>
    <script src="olympus/js/ajax-pagination.js"></script>
    <script src="olympus/js/Chart.js"></script>
    <script src="olympus/js/chartjs-plugin-deferred.js"></script>
    <script src="olympus/js/circle-progress.js"></script>
    <script src="olympus/js/loader.js"></script>
    <script src="olympus/js/run-chart.js"></script>
    <script src="olympus/js/jquery.magnific-popup.js"></script>
    <script src="olympus/js/jquery.gifplayer.js"></script>
    <script src="olympus/js/mediaelement-and-player.js"></script>
    <script src="olympus/js/mediaelement-playlist-plugin.min.js"></script>

    <script src="olympus/js/base-init.js"></script>
    <script defer src="olympus/fonts/fontawesome-all.js"></script>

    <script src="olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

    <?php
}
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
