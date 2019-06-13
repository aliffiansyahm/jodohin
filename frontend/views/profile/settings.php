<!-- Top Header-Profile -->

<?php
/**
 * @var pengguna
 */
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\services\ProfileService;

$profile_service = new ProfileService();
//    var_dump($pengguna);
?>

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb">
                        <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/top-header1.jpg" alt="nature">
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="<?php Yii::$app->request->BaseUrl ?>/profile/index<?php if ($pengguna['IDPENGGUNA'] != $_SESSION['id']) { echo "?id=".$pengguna['IDPENGGUNA']; } ?>">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="#" class="active">Photos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/sesi">cek sesi coba</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="<?php Yii::$app->request->BaseUrl ?>/profile/followers<?php if ($pengguna['IDPENGGUNA'] != $_SESSION['id']) { echo "?id=".$pengguna['IDPENGGUNA']; } ?>">Followers</a>
                                    </li>
                                    <li>
                                        <a href="<?php Yii::$app->request->BaseUrl ?>/profile/following<?php if ($pengguna['IDPENGGUNA'] != $_SESSION['id']) { echo "?id=".$pengguna['IDPENGGUNA']; } ?>">Following</a>
                                    </li>
                                    <li>
                                        <div class="more">
                                            <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                            <ul class="more-dropdown more-with-triangle">
                                                <li>
                                                    <a href="#">Report Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">Block Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="control-block-button">
                            <?php if ($_SESSION['id'] == $pengguna['IDPENGGUNA'] && !isset($_SESSION['idkepribadian'])) { ?>
                                <a href="<?php echo Yii::$app->request->BaseUrl ?>/pertanyaan/kerjakan" class="btn btn-control bg-blue">
                                    <svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                </a>

                            <?php } else {?>
                                <a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/friend" class="btn btn-control bg-purple">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                </a>
                            <?php } ?>
                            <div class="btn btn-control bg-primary more">
                                <svg class="olymp-settings-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Profile Photo</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
                                    </li>
                                    <li>
                                        <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-header-author">
                        <a href="02-ProfilePage.html" class="author-thumb">
                            <?php if ($pengguna['FOTO'] == ""): ?>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author">
                            <?php else: ?>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/foto/post/1.png" alt="author">
                            <?php endif; ?>
                        </a>
                        <div class="author-content">
                            <a href="02-ProfilePage.html" class="h4 author-name"><?php echo $pengguna['NAMA']?></a>
                            <?php if ($_SESSION['id'] == $pengguna['IDPENGGUNA'] && $pengguna['ALAMAT'] == ""): ?>
                                <a href="#"><div class="country badge-primary rounded">Update alamat</div></a>
                            <?php else: ?>
                                <div class="country"><?php echo $pengguna['ALAMAT']; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Top Header-Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Personal Information</h6>
                </div>
                <div class="ui-block-content">


                    <!-- Personal Information Form  -->

                    <form method="post" action="<?php echo Yii::$app->request->BaseUrl; ?>/profile/settingsstore">
                        <?php
                        echo  Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        );
                        ?>
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nama</label>
                                    <input name="NAMA" class="form-control" placeholder="" type="text" value="<?php echo $pengguna['NAMA']; ?>">
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input name="EMAIL" class="form-control" placeholder="" type="email" value="<?php echo $pengguna['EMAIL']; ?>">
                                </div>

                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input name="datetimepicker" value="<?php echo date('d/m/Y', strtotime($pengguna['TANGGALLAHIR'])); ?>" />
                                    <span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
                                    </span>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Alamat</label>
                                    <input name="ALAMAT" class="form-control" placeholder="" type="text" value="<?php echo $pengguna['ALAMAT']; ?>">
                                </div>

                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <select class="selectpicker form-control" name="JENISKELAMIN">
                                        <option value="Laki Laki" <?php if ($pengguna['JENISKELAMIN'] == "Laki Laki"){ echo "selected"; }; ?>>Laki - laki</option>
                                        <option value="Perempuan" <?php if ($pengguna['JENISKELAMIN'] == "Perempuan"){ echo "selected"; }; ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Bio</label>
                                    <textarea class="form-control" placeholder="" name="BIO"><?php echo $pengguna['BIO']; ?></textarea>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button type="reset" class="btn btn-secondary btn-lg full-width">Reset</button>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button type="submit" class="btn btn-primary btn-lg full-width">Save</button>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Personal Information Form  -->
                </div>
            </div>
        </div>

        <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
            <div class="ui-block">



                <!-- Your Profile  -->

                <div class="your-profile">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Your PROFILE</h6>
                    </div>

                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Profile Settings
                                        <svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <ul class="your-profile-menu">
                                    <li>
                                        <a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
                                    </li>
                                    <li>
                                        <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                    </li>
                                    <li>
                                        <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                                    </li>
                                    <li>
                                        <a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ... end Your Profile  -->


            </div>
        </div>
    </div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
    <div class="modal-dialog window-popup update-header-photo" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Update Header Photo</h6>
            </div>
            <div class="modal-body">
                <div class="image-upload upload-photo-item">
                    <?= Html::a('Update', ['../web/pengguna/update', 'id' => $pengguna['IDPENGGUNA']], ['class' => 'btn btn-primary']) ?>
                    <!-- <svg class="olymp-computer-icon"><use xlink:href="<?php //echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg> -->

                    <!-- <h6>Upload Photo</h6> -->

                    <!-- <span>Browse your computer.</span> -->

                    <!-- <input type="file" id="file-input"  name="picture" style="display:none;"/> -->
                    <!-- <input class="file-path validate" type="text" placeholder="Browse your computer" align="center"> -->
                    <!-- <input type="submit" value="Upload"> -->
                    <!-- <a href="../" class="upload-photo-item"> -->

                    <!-- </a> -->
                </div>

                <!-- <div class="upload-photo-item">
					<div class="file-field">
						<a class="float-center">
							<svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
							<i aria-hidden="true"></i>
							<input type="file" name="fotoprofile" >
						</a>
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" placeholder="Browse from your computer">
					</div>
					<input type="submit" value="Upload">
				</div> -->

                <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                    <svg class="olymp-photos-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

                    <h6>Choose from My Photos</h6>
                    <span>Choose from your uploaded photos</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
    <div class="modal-dialog window-popup update-header-photo" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <div class="modal-body">
                <a href="#" class="upload-photo-item">
                    <svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

                    <h6>Upload Photo</h6>
                    <span>Browse your computer.</span>
                </a>

                <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                    <svg class="olymp-photos-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

                    <h6>Choose from My Photos</h6>
                    <span>Choose from your uploaded photos</span>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->
<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
    <div class="modal-dialog window-popup choose-from-my-photo" role="document">

        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo1.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo2.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo3.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo4.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo5.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo6.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo7.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo8.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo9.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo10.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo11.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo12.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo13.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity & Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo14.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/choose-photo15.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->
