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
    <div class="table-responsive">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>IDPERTANYAAN</th>
          <th>PERTANYAAN</th>
        </tr>
      </thead>
      <tbody><?php $i=1; ?>
        <?php foreach ($dataPertanyaan as $nilai) { ?>
          <tr>
            <td><?php echo $nilai["IDPERTANYAAN"]; ?></td>
            <td><?php echo $nilai["PERTANYAAN"]; ?></td>
            <td align="right"><?= Html::a('Lihat',['view','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-info']) ?>
                <?= Html::a('Ubah',['update','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-warning']) ?>
                <?= Html::a('Hapus',['delete','id'=>$nilai['IDPERTANYAAN']],['class' => 'btn btn-danger']) ?></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
    </div>


</div>
