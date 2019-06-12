<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenggunaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengguna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDPENGGUNA') ?>

    <?= $form->field($model, 'IDKEPRIBADIAN') ?>

    <?= $form->field($model, 'EMAIL') ?>

    <?= $form->field($model, 'PASSWORD') ?>

    <?= $form->field($model, 'NAMA') ?>

    <?php // echo $form->field($model, 'TANGGALLAHIR') ?>

    <?php // echo $form->field($model, 'ALAMAT') ?>

    <?php // echo $form->field($model, 'BIO') ?>

    <?php // echo $form->field($model, 'FOTO') ?>

    <?php // echo $form->field($model, 'JENISKELAMIN') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
