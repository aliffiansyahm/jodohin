<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\kepribadianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kepribadians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kepribadian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Kepribadian', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!--
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDKEPRIBADIAN',
            'NAMAKEPRIBADIAN',
            'DESKRIPSIKEPRIBADIAN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  -->
  <div class="row">
    <?php foreach ($dataKepribadian as $nilai) { ?>
    <div class="col-xs-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $nilai["NAMAKEPRIBADIAN"]; ?></h4>
          <p class="card-text"><?php echo $nilai["DESKRIPSIKEPRIBADIAN"]; ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>


</div>
