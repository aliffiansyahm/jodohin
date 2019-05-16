<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PertanyaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jawab Dengan Sebenar-benarnya';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <form action="hitung" method="get">
      <?php $nomer=0; ?>
      <?php foreach ($dataPertanyaan as $nilai) { ?>
          <br><br><?php echo $nilai["IDPERTANYAAN"]; ?><br>
          <?php echo $nilai["PERTANYAAN"]; ?>
          <?php for ($i=1; $i < 5; $i++) { ?>
            <br><input type="radio" name="jawaban<?php echo $nomer; ?>" value="<?php echo $i; ?>"><?php echo $nilai["PILIHAN$i"]; ?>
          <?php } ?>
          <?php $nomer++; ?>
      <?php } ?>
      <div class="form-group">
          <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
      </div>
    </form>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
