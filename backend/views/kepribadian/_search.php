<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KepribadianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kepribadian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDKEPRIBADIAN') ?>

    <?= $form->field($model, 'NAMAKEPRIBADIAN') ?>

    <?= $form->field($model, 'DESKRIPSIKEPRIBADIAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
