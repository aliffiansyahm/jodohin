<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PertanyaanSearch */
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
    <!--
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
            'PILIHAN4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    -->
    <table class="table table-hover">
    <thead>
      <tr>
        <th>IDPERTANYAAN</th>
        <th>PERTANYAAN</th>
        <th>JAWABAN 1</th>
        <th>JAWABAN 2</th>
        <th>JAWABAN 3</th>
        <th>JAWABAN 4</th>
      </tr>
    </thead>
    <tbody><?php $i=1; ?>
      <?php foreach ($dataPertanyaan as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDPERTANYAAN"]; ?></td>
          <td><?php echo $nilai["PERTANYAAN"]; ?></td>
          <td><?php echo $nilai["PILIHAN1"]; ?></td>
          <td><?php echo $nilai["PILIHAN2"]; ?></td>
          <td><?php echo $nilai["PILIHAN3"]; ?></td>
          <td><?php echo $nilai["PILIHAN4"]; ?></td>
          <td><?= Html::a('Lihat',['view','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-info btn-block']) ?><br><br>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-warning btn-block']) ?><br><br>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-danger btn-block']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
  </table>

</div>
