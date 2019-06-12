<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KomentarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDKOMENTAR') ?>

    <?= $form->field($model, 'IDPENGGUNA') ?>

    <?= $form->field($model, 'IDPOST') ?>

    <?= $form->field($model, 'ISIKOMENTAR') ?>

    <?= $form->field($model, 'WAKTUKOMENTAR') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
