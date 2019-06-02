<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hobi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hobi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMAHOBI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
