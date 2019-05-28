<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TipeNotifiikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipenotifiikasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipenotifiikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipenotifiikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-hover">
    <thead>
      <tr>
        <th>IDNOTIFIKASI</th>
        <th>PENGIRIM</th>
        <th>PENERIMA</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataTypeNotifikasi as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDTYPENOTIFIKASI"]; ?></td>
          <td><?php echo $nilai["TIPENOTIFIKASI"]; ?></td>
          <td><?= Html::a('Lihat',['view','id'=>$nilai['IDTYPENOTIFIKASI']],['class' => 'btn btn-info btn-block']) ?><br><br>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDTYPENOTIFIKASI']],['class' => 'btn btn-warning btn-block']) ?><br><br>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDTYPENOTIFIKASI']],['class' => 'btn btn-danger btn-block']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
