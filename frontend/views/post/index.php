<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPOST',
            'IDPENGGUNA',
            'GAMBARPOST',
            'CAPTION',
            'WAKTUPOST',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->
    <div class="row">
      <?php foreach ($postingan as $nilai) { ?>
      <div class="col-xs-12 col-md-3">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="../fotopost/<?php echo $nilai->GAMBARPOST; ?>" alt="post gambar" style="width:100%">
          <div class="card-body">
            <p class="card-text"><?php echo $nilai["CAPTION"]; ?></p>
            <a href="view?id=<?php echo $nilai["IDPOST"]?>" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <?= Html::a('Kembali ke home', ['pengguna/home'], ['class' => 'btn btn-primary']) ?>
</div>
