<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengguna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Update Foto Profil</h6>
        </div>
        <div class="ui-block-content">
        <div class="pengguna-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'FOTO')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
        </div>
        </div>

