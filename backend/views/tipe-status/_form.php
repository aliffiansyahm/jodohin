<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TipeStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipe-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMASTATUS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
