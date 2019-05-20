<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pertanyaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertanyaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PERTANYAAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PILIHAN1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PILIHAN2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PILIHAN3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PILIHAN4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
