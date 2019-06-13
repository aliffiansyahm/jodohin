<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Pesan */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="ui-block">
  <div class="ui-block-title">
    <h6 class="title">Pilih User</h6>
  </div>
  <div class="ui-block-content">
    <div class="pesan-form">

        <?php $form = ActiveForm::begin([
          'method' => 'get',
          'action' => URL::to(['pesan/getsesi']),
        ]); ?>
        <?php //print_r($pengguna) ?>
        <?php //$form->field($model, 'pengirim')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('Pengirim') ?>

        <!-- <label for="pilihpengirim">PENGIRIM</label> -->
          <!-- <select name="pengirim" class="form-control form-control-md" id="pilihpengirim">
            <?php foreach ($pengguna as $nilai): ?>
            <option value="<?php echo $nilai['IDPENGGUNA']; ?>"><?php echo $nilai['NAMA']; ?> </option>
            <?php endforeach;  ?>
          </select> -->
          <!-- <input type="hidden" name="pengirim" value="<?php echo $_SESSION['id']; ?>"> -->
          <br>
          <label for="pilihpenerima">PENERIMA</label>
            <select name="penerima" class="form-control form-control-md" id="pilihpenerima">
              <?php foreach ($pengguna as $nilai): ?>
              <option value="<?php echo $nilai['IDPENGGUNA']; ?>"><?php echo $nilai['NAMA']; ?> </option>
              <?php endforeach;  ?>
            </select>


        <?php //$form->field($model, 'penerima')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('Penerima') ?>
        <br>
        <div class="form-group">
            <?= Html::submitButton('MULAI SIMULASI', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

  </div>
</div>
