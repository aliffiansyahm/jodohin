<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="ui-block">
  <div class="ui-block-title">
    <h6><?= Html::encode($this->title) ?></h6>
  </div>
  <div class="ui-block-content">
    <div class="post-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'IDPENGGUNA')->hiddenInput(['value'=> $_SESSION['id']])->label(false);?>
        <?php if($this->title!='Update Post') {?>
        <?= $form->field($model, 'GAMBARPOST')->fileInput() ?>
        <?php } ?>
        <?= $form->field($model, 'CAPTION')->textArea(['maxlength' => true]) ?>

        <?= $form->field($model, 'WAKTUPOST')->hiddenInput(['value'=> date('Y-m-d')])->label(false);?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
  </div>
</div>
