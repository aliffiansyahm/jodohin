<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HobiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hobis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hobi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hobi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID HOBI</th>
        <th>NAMA HOBI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataHobi as $nilai) { ?>
        <tr>
          <td><?php echo $nilai["IDHOBI"]; ?></td>
          <td><?php echo $nilai["NAMAHOBI"]; ?></td>
          <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDHOBI']],['class' => 'btn btn-info']) ?>
              <?= Html::a('Ubah',['update','id'=>$nilai['IDHOBI']],['class' => 'btn btn-warning']) ?>
              <?= Html::a('Hapus',['delete','id'=>$nilai['IDHOBI']],['class' => 'btn btn-danger']) ?></td>
        </tr>
      <?php } ?>

    </tbody>
    </table>

</div>
