<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PertanyaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertanyaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDPERTANYAAN') ?>

    <?= $form->field($model, 'PERTANYAAN') ?>

    <?= $form->field($model, 'PILIHAN1') ?>

    <?= $form->field($model, 'PILIHAN2') ?>

    <?= $form->field($model, 'PILIHAN3') ?>

    <?php // echo $form->field($model, 'PILIHAN4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
