<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HubunganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDHUBUNGAN') ?>

    <?= $form->field($model, 'IDSTATUS') ?>

    <?= $form->field($model, 'IDPENGGUNA1') ?>

    <?= $form->field($model, 'IDPENGGUNA2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
