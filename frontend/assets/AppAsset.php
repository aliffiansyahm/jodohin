<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'landing-assets/css/bootstrap/bootstrap.css',
        'landing-assets/fonts/ionicons/css/ionicons.min.css',
        'landing-assets/fonts/law-icons/font/flaticon.css',
        'landing-assets/fonts/fontawesome/css/font-awesome.min.css',
        'landing-assets/css/slick.css',
        'landing-assets/css/slick-theme.css',
        'landing-assets/css/helpers.css',
        'landing-assets/css/style.css',
        'landing-assets/css/landing-2.css',
    ];
    public $js = [
        'landing-assets/js/jquery.min.js',
        'landing-assets/js/popper.min.js',
        'landing-assets/js/bootstrap.min.js',
        'landing-assets/js/slick.min.js',
        'landing-assets/js/jquery.mb.YTPlayer.min.js',
        'landing-assets/js/jquery.waypoints.min.js',
        'landing-assets/js/jquery.easing.1.3.js',
        'landing-assets/js/main.js',
//        'cool-assets/vendor/jquery-3.2.1.min.js',
//        'cool-assets/vendor/bootstrap-4.1/popper.min.js',
//        'cool-assets/vendor/bootstrap-4.1/bootstrap.min.js',
//        'cool-assets/vendor/slick/slick.min.js',
        'cool-assets/vendor/wow/wow.min.js',
        'cool-assets/vendor/animsition/animsition.min.js',
        'cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
//        'cool-assets/vendor/counter-up/jquery.waypoints.min.js',
        'cool-assets/vendor/counter-up/jquery.counterup.min.js',
        'cool-assets/vendor/circle-progress/circle-progress.min.js',
        'cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.js',
        'cool-assets/vendor/chartjs/Chart.bundle.min.js',
        'cool-assets/vendor/select2/select2.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
