<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$session = Yii::$app->session;
/* @var $this yii\web\View */
/* @var $model frontend\models\Komentar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPENGGUNA')->hiddenInput(['value'=> $session['id']])->label(false) ?>

    <?= $form->field($model, 'IDPOST')->hiddenInput(['value'=> Yii::$app->request->get('id')])->label(false) ?>

    <?= $form->field($model, 'ISIKOMENTAR')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
