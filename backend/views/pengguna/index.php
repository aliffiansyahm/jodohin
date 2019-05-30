<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="table-responsive">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>ID PERTANYAAN</th>
          <th>NAMA</th>
          <th>EMAIL</th>
          <th>ALAMAT</th>
          <th>JENISKELAMIN</th>
        </tr>
      </thead>
      <tbody><?php $i=1; ?>
        <?php foreach ($dataPengguna as $nilai) { ?>
          <tr>
            <td><?php echo $nilai["IDPENGGUNA"]; ?></td>
            <td><?php echo $nilai["NAMA"]; ?></td>
            <td><?php echo $nilai["BIO"]; ?></td>
            <td><?php echo $nilai["EMAIL"]; ?></td>
            <td><?php echo $nilai["ALAMAT"]; ?></td>
            <td><?php echo $nilai["JENISKELAMIN"]; ?></td>
            <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDPENGGUNA']],['class' => 'btn btn-info']) ?>
                <?= Html::a('Ubah',['update','id'=>$nilai['IDPENGGUNA']],['class' => 'btn btn-warning']) ?>
                <?= Html::a('Hapus',['delete','id'=>$nilai['IDPENGGUNA']],['class' => 'btn btn-danger']) ?></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
    </div>

</div>
