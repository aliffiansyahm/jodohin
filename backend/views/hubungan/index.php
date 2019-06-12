<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Pengguna;
use backend\models\Tipestatus;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HubunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hubungans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hubungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hubungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID HUBUNGAN</th>
        <th>PENGIRIM</th>
        <th>PENERIMA</th>
        <th>TIPE HUBUNGAN</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataHubungan as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDHUBUNGAN"]; ?></td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENGGUNA1"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $nilai["IDPENGGUNA2"]])->one();
              echo $dataorang['NAMA'];
            ?>
          </td>
          <td>
            <?php
              $dataorang = Tipestatus::find()->where(['IDSTATUS' => $nilai["IDSTATUS"]])->one();
              echo $dataorang['NAMASTATUS'];
            ?>
          </td>
          <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDHUBUNGAN']],['class' => 'btn btn-info']) ?>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDHUBUNGAN']],['class' => 'btn btn-warning']) ?>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDHUBUNGAN']],['class' => 'btn btn-danger']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
