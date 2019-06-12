<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TipeNotifiikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipenotifiikasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipenotifiikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipenotifiikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDTYPENOTIFIKASI',
            'TIPENOTIFIKASI',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
