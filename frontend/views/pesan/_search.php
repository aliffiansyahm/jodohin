<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PesanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDPESAN') ?>

    <?= $form->field($model, 'IDPENGIRIMPESAN') ?>

    <?= $form->field($model, 'IDTIPEPESAN') ?>

    <?= $form->field($model, 'IDPENERIMAPESAN') ?>

    <?= $form->field($model, 'ISIPESAN') ?>

    <?php // echo $form->field($model, 'WAKTUPESAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
