<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KepribadianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kepribadians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kepribadian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kepribadian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>ID KEPRIBADIAN</th>
      <th>NAMA KEPRIBADIAN</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($dataKepribadian as $nilai) { ?>
      <tr>
        <td><?php echo $nilai["IDKEPRIBADIAN"]; ?></td>
        <td><?php echo $nilai["NAMAKEPRIBADIAN"]; ?></td>
        <!-- <td><?php echo $nilai["DESKRIPSIKEPRIBADIAN"]; ?></td> -->
        <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDKEPRIBADIAN']],['class' => 'btn btn-info']) ?>
            <?= Html::a('Ubah',['update','id'=>$nilai['IDKEPRIBADIAN']],['class' => 'btn btn-warning']) ?>
            <?= Html::a('Hapus',['delete','id'=>$nilai['IDKEPRIBADIAN']],['class' => 'btn btn-danger']) ?></td>
      </tr>
    <?php } ?>

  </tbody>
</table>
</div>
