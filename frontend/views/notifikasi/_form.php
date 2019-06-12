<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Notifikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGIRIMNOTIF')->textInput() ?>

    <?= $form->field($model, 'IDTYPENOTIFIKASI')->dropDownList($tipeNotifikasi,['prompt'=>'-pilih satu-'])->label('Kategory Pesan') ?>

    <?= $form->field($model, 'IDPENERIMANOTIF')->textInput() ?>

    <?= $form->field($model, 'ISI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
