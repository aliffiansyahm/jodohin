<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGGUNA')->hiddenInput(['value'=> $_SESSION['id']])->label(false);?>

    <?= $form->field($model, 'GAMBARPOST')->fileInput() ?>

    <?= $form->field($model, 'CAPTION')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'WAKTUPOST')->hiddenInput(['value'=> date('Y-m-d')])->label(false);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
