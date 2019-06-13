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
<div class="ui-block">
  <div class="ui-block-title">
    <?= Html::a('All', 'index', ['class' => 'btn btn-success']) ?>
    <h6 class="title"><?php
      $dataorang = Pengguna::find()->where(['IDPENGGUNA' => $_SESSION["penerima"]])->one();
      echo $dataorang['NAMA'];
    ?></h6>
  </div>
  <div class="ui-block-content">
    <div class="pesan-index">


            <!-- <?= Html::a('Ganti Orang', 'simulasi', ['class' => 'btn btn-success']) ?> -->
      <h1></h1>
        <table class="table  table-small">

        <tbody>
          <?php foreach ($dataPesan as $nilai) { ?>
                <?php if($nilai['IDPENGIRIMPESAN'] == $_SESSION['pengirim']) { ?>
                <tr>
                  <td></td>
                  <td align="right"><?php echo $nilai["ISIPESAN"]; ?><br><?php echo $nilai["WAKTUPESAN"]; ?></td>
                </tr>
              <?php } else { ?>
                <tr>
                  <td align="left"><?php echo $nilai["ISIPESAN"]; ?><br><?php echo $nilai["WAKTUPESAN"]; ?></td>
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

  </div>
</div>
