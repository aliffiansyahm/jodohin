<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hubungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDSTATUS')->dropDownList($tipeHubungan,['prompt'=>'-pilih satu-'])->label('tipe Hubungan') ?>

    <?= $form->field($model, 'IDPENGGUNA1')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('pengguna 1 (pengirim)') ?>

    <?= $form->field($model, 'IDPENGGUNA2')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('pengguna 2 (penerima)') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
