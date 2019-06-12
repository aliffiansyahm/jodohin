<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Pengguna;
use backend\models\Tipepesan;
use backend\models\Pesan;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PesanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'simulasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Ganti Orang', 'simulasi', ['class' => 'btn btn-success']) ?>

    <table class="table table-hover">
    <thead>
      <tr>
        <th><?php
          $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $_SESSION["penerima"]])->one();
          echo $dataorang['NAMA'];
        ?></th>
        <th><?php
          $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $_SESSION["pengirim"]])->one();
          echo $dataorang['NAMA'];
        ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dataPesan as $nilai) { ?>
            <?php if($nilai['IDPENGIRIMPESAN'] == $_SESSION['pengirim']) { ?>
            <tr>
              <td></td>
              <td><?php echo $nilai["ISIPESAN"]; ?><br><?php echo $nilai["WAKTUPESAN"]; ?></td>
            </tr>
          <?php } else { ?>
            <tr>
              <td><?php echo $nilai["ISIPESAN"]; ?><br><?php echo $nilai["WAKTUPESAN"]; ?></td>
              <td></td>
            </tr>
          <?php } ?>
      <?php } ?>

    </tbody>
    </table>
    <br><br>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'IDPENGIRIMPESAN')->hiddenInput(['value'=> $_SESSION['pengirim']])->label(false); ?>
    <?= $form->field($model, 'IDPENERIMAPESAN')->hiddenInput(['value'=> $_SESSION['penerima']])->label(false); ?>
    <?= $form->field($model, 'IDTIPEPESAN')->hiddenInput(['value'=> 1])->label(false); ?>
    <?= $form->field($model, 'ISIPESAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('KIRIM', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
