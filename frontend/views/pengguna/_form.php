<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengguna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengguna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TANGGALLAHIR')->textInput() ?>

    

    <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JENISKELAMIN')->dropDownList(
			['Laki Laki' => 'Laki Laki', 'Perempuan' => 'Perempuan']
			); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
