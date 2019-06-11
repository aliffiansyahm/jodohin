<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/*
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JODOHIN Login [ admin ]</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo Yii::$app->request->BaseUrl ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                  <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                  <!-- <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div> -->
                </div>
                <div class="form-group">
                  <?= $form->field($model, 'password')->passwordInput() ?>
                  <!-- <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div> -->
                </div>
                <div class="form-group">
                  <?= Html::submitButton('Login', ['class' => 'btn btn-primary submit-btn btn-block', 'name' => 'login-button']) ?>
                  <!-- <button class="btn btn-primary submit-btn btn-block">Login</button> -->
                </div>
                <div class="form-group d-flex justify-content-between">
                  <?= $form->field($model, 'rememberMe')->checkbox() ?>
                  <!-- <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div> -->
                </div>
              <?php ActiveForm::end(); ?>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Jodoh.In. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/off-canvas.js"></script>
  <!-- <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/hoverable-collapse.js"></script> -->
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/misc.js"></script>
  <!-- <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/settings.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/todolist.js"></script> -->
  <!-- endinject -->
</body>

</html>
