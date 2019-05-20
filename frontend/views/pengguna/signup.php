<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model SignupForm */

use frontend\models\SignupForm;
?>
<?=$this->render('../layouts/login-logout/header')?>
<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 relative align-self-center">

                <form action="../pengguna/create" class="bg-white rounded pb_form_v1" method="post">
                    <h2 class="mb-4 mt-0 text-center">Daftar Sekarang</h2>
                    <div class="form-group">
                        <input type="text" class="form-control pb_height-50 reverse" name="name" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control pb_height-50 reverse" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control pb_height-50 reverse" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="register">
                    </div>
                </form>

            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <h2 class="heading mb-3">Jodoh.in</h2>
                <div class="sub-heading">
                    <p class="mb-4">Temukan jodohmu disini!</p>
                    <!--                    <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">See Pricing</span></a></p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>