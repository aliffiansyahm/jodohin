<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NotifikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notifikasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Notifikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDNOTIFIKASI',
            'pENGIRIMNOTIF.NAMA',
            'tYPENOTIFIKASI.TIPENOTIFIKASI',
            'pENERIMANOTIF.NAMA',
            'ISI',
            'WAKTUNOTIFIKASI',
            'STATUSNOTIFIKASI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
