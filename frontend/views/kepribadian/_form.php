<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\kepribadian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kepribadian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMAKEPRIBADIAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESKRIPSIKEPRIBADIAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
