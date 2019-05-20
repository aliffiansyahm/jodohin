<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PertanyaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pertanyaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pertanyaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPERTANYAAN',
            'PERTANYAAN',
            'PILIHAN1',
            'PILIHAN2',
            'PILIHAN3',
            //'PILIHAN4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
