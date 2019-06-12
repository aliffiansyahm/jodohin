<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TipeStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipe Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipe-status-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipe Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID TIPE PESAN</th>
        <th>NAMA TIPE PESAN</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataTipeStatus as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDSTATUS"]; ?></td>
          <td><?php echo $nilai["NAMASTATUS"]; ?></td>
          <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDSTATUS']],['class' => 'btn btn-info']) ?>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDSTATUS']],['class' => 'btn btn-warning']) ?>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDSTATUS']],['class' => 'btn btn-danger']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>
</div>
