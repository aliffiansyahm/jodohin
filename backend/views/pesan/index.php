<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Pengguna;
use backend\models\Tipepesan;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PesanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pesan', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Simulasi', ['simulasi'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID NOTIFIKASI</th>
        <th>PENGIRIM</th>
        <th>PENERIMA</th>
        <th>TIPE NOTIF</th>
        <th>ISI</th>
        <th>WAKTU</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataPesan as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDPESAN"]; ?></td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENGIRIMPESAN"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENERIMAPESAN"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = TipePesan::find()->where(['IDTIPEPESAN' => $nilai["IDTIPEPESAN"]])->one();
              echo $dataorang['NAMATIPEPESAN'];
            ?>
          </td>
          <td><?php echo $nilai["ISIPESAN"]; ?></td>
          <td><?php echo $nilai["WAKTUPESAN"]; ?></td>
          <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDPESAN']],['class' => 'btn btn-info']) ?>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDPESAN']],['class' => 'btn btn-warning']) ?>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDPESAN']],['class' => 'btn btn-danger']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
