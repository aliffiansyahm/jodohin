<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PesanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pesan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPESAN',
            'IDPENGIRIMPESAN',
            'IDTIPEPESAN',
            'IDPENERIMAPESAN',
            'ISIPESAN',
            //'WAKTUPESAN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
