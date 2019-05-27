<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Pengguna;
use backend\models\TipeNotifiikasi;

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
    <table class="table table-hover">
    <thead>
      <tr>
        <th>IDNOTIFIKASI</th>
        <th>PENGIRIM</th>
        <th>PENERIMA</th>
        <th>TIPENOTIF</th>
        <th>ISI</th>
        <th>WAKTU</th>
        <th>STATUSNOTIFIKASI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataNotifikasi as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDNOTIFIKASI"]; ?></td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENGIRIMNOTIF"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENERIMANOTIF"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = TipeNotifiikasi::find()->where(['IDTYPENOTIFIKASI' => $nilai["IDTYPENOTIFIKASI"]])->one();
              echo $dataorang['TIPENOTIFIKASI'];
            ?>
          </td>
          <td><?php echo $nilai["ISI"]; ?></td>
          <td>
            <?php
              if($nilai["STATUSNOTIFIKASI"]==1){
                echo "DIBACA";
              } else {
                echo "BELUM DIBACA";
              }
            ?>
          </td>
          <td><?= Html::a('Lihat',['view','id'=>$nilai['IDNOTIFIKASI']],['class' => 'btn btn-info btn-block']) ?><br><br>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDNOTIFIKASI']],['class' => 'btn btn-warning btn-block']) ?><br><br>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDNOTIFIKASI']],['class' => 'btn btn-danger btn-block']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
