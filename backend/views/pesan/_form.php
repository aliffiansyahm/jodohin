<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pesan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGIRIMPESAN')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('Pengirim') ?>

    <?= $form->field($model, 'IDTIPEPESAN')->dropDownList($tipePesan,['prompt'=>'-pilih satu-'])->label('TIPE PESAN') ?>

    <?= $form->field($model, 'IDPENERIMAPESAN')->dropDownList($pengguna,['prompt'=>'-pilih satu-'])->label('Penerima') ?>

    <?= $form->field($model, 'ISIPESAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
