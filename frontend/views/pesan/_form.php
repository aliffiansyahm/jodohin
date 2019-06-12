<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pesan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGIRIMPESAN')->textInput() ?>

    <?= $form->field($model, 'IDTIPEPESAN')->textInput() ?>

    <?= $form->field($model, 'IDPENERIMAPESAN')->textInput() ?>

    <?= $form->field($model, 'ISIPESAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WAKTUPESAN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
