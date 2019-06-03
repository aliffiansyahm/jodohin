<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Notifikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGIRIMNOTIF')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('Pengirim') ?>

    <?= $form->field($model, 'IDTYPENOTIFIKASI')->dropDownList($tipeNotifikasi,['prompt'=>'-pilih satu-'])->label('Kategory Pesan') ?>

    <?= $form->field($model, 'IDPENERIMANOTIF')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('PENERIMA') ?>

    <?= $form->field($model, 'ISI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
