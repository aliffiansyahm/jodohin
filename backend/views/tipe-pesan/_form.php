<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TipePesan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipe-pesan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMATIPEPESAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
