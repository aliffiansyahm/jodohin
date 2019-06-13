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
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title"><?php echo $pengguna['NAMA'];?> Photo Gallery</div>

                    <div class="block-btn align-right">
                        <a href="#" data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="photo-page" role="tabpanel">

                    <div class="photo-album-wrapper">
                        <?php foreach ($photos as $photo) { ?>
                            <div class="photo-item col-4-width">
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/foto/post/<?php echo $photo['GAMBARPOST']; ?>" alt="photo">
                                <div class="overlay overlay-dark"></div>
                                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                                    <span>15</span>
                                </a>
                                <div class="content">
                                    <a href="#" class="h6 title"><?php echo substr($photo['CAPTION'], 0, 9); ?>...</a>
                                    <time class="published" datetime="2017-03-24T18:18"><?php echo date('d-m-Y', strtotime($photo['WAKTUPOST'])); ?></time>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                </div>
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
