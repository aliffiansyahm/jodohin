<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TipePesanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipe Pesans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipe-pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipe Pesan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="col-6">

    </div>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID TIPE PESAN</th>
        <th>NAMA TIPE PESAN</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataTipePesan as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDTIPEPESAN"]; ?></td>
          <td><?php echo $nilai["NAMATIPEPESAN"]; ?></td>
          <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDTIPEPESAN']],['class' => 'btn btn-info']) ?>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDTIPEPESAN']],['class' => 'btn btn-warning']) ?>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDTIPEPESAN']],['class' => 'btn btn-danger']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
