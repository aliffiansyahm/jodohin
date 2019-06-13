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
						<?php if ($pengguna['FOTOHEADER']==""):  ?>
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/top-header1.jpg" alt="nature">
						<?php  else :?>
							<img src="<?php echo Yii::getAlias('@fileUrl') ?>/header/<?php echo $pengguna['FOTOHEADER']?>" alt="author" width="1920" height="400">
						<?php endif;?>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="#" class="active">Timeline</a>
									</li>
                                    <li>
                                        <a href="<?php Yii::$app->request->BaseUrl ?>/profile/photos<?php if ($pengguna['IDPENGGUNA'] != $_SESSION['id']) { echo "?id=".$pengguna['IDPENGGUNA']; } ?>">Photos</a>
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
										<a href="#" data-toggle="modal" data-target="#update-profile-photo">Update Profile Photo</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
									</li>
									<li>
										<a href="#">Account Settings</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header-author">
                        <a href="#" class="author-thumb">
                            <?php if ($pengguna['FOTO'] == ""): ?>
                                <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author" >
                            <?php else: ?>
                                <img src="<?php echo Yii::getAlias('@fileUrl') ?>/profile/<?php echo $pengguna['FOTO']?>" alt="author" width="124" height="124">
                            <?php endif; ?>
						</a>
						<div class="author-content">
							<a href="#" class="h4 author-name"><?php echo $pengguna['NAMA']?></a>
                            <?php if ($_SESSION['id'] == $pengguna['IDPENGGUNA'] && $pengguna['ALAMAT'] == ""): ?>
							    <a href="#"><div class="country badge-primary rounded">Update alamat</div></a>
                            <?php elseif ($pengguna['ALAMAT'] == ""): ?>
                                <div class="country">Address doesn't update yet.</div>
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

		<!-- Main Content -->

		<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">
                <?php if ($profile_service->countPosts($pengguna['IDPENGGUNA']) > 0): ?>
                    <?php foreach ($profile_service->getSelfPosts($pengguna['IDPENGGUNA']) as $post) { ?>
                    <!-- Post -->
                    <div class="ui-block">
                        <article class="hentry post">
                            <div class="post__author author vcard inline-items">
                                <?php if ($pengguna['FOTO'] == ""): ?>
                                    <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author">
                                <?php else: ?>
                                    <img src="<?php echo Yii::getAlias('@fileUrl') ?>/profile/<?php echo $pengguna['FOTO']?>" alt="author">
                                <?php endif; ?>
                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#"><?php echo $pengguna['NAMA'] ?></a>
                                        <?php if ($post['GAMBARPOST'] != "") { echo "shared photo"; } ?>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            at <?php echo date('d-m-Y', strtotime($post['WAKTUPOST'])); ?>
                                        </time>
                                    </div>
                                </div>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Edit Post</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete Post</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <p>
                                <?php echo $post['CAPTION']; ?>
                            </p>
                            <?php if ($post['GAMBARPOST'] != ""): ?>
                                <div class="post-thumb">
                                    <img src="<?php echo Yii::getAlias('@fileUrl') ?>/post/<?=$post['GAMBARPOST'] ?>" alt="photo">
                                </div>
                            <?php endif; ?>
                            <div class="post-additional-info inline-items">

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>

                                <ul class="friends-harmonic">
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic10.jpg" alt="friend">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic11.jpg" alt="friend">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    <a href="#">Jenny</a>, <a href="#">Robert</a> and
                                    <br>6 more liked this
                                </div>


                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
                                        </svg>
                                        <span>17</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon">
                                            <use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                        </svg>
                                        <span>24</span>
                                    </a>
                                </div>

                            </div>

    <!--                        <div class="control-block-button post-control-button">-->
    <!---->
    <!--                                <a href="#" class="btn btn-control featured-post">-->
    <!--                                    <svg class="olymp-trophy-icon">-->
    <!--                                        <use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-trophy-icon"></use>-->
    <!--                                    </svg>-->
    <!--                                </a>-->
    <!---->
    <!--                                <a href="#" class="btn btn-control">-->
    <!--                                    <svg class="olymp-like-post-icon">-->
    <!--                                        <use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>-->
    <!--                                    </svg>-->
    <!--                                </a>-->
    <!---->
    <!--                                <a href="#" class="btn btn-control">-->
    <!--                                    <svg class="olymp-comments-post-icon">-->
    <!--                                        <use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>-->
    <!--                                    </svg>-->
    <!--                                </a>-->
    <!---->
    <!--                                <a href="#" class="btn btn-control">-->
    <!--                                    <svg class="olymp-share-icon">-->
    <!--                                        <use xlink:href="<--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>-->
    <!--                                    </svg>-->
    <!--                                </a>-->
    <!---->
    <!--                            </div>-->
                        </article>
                    </div>
                    <!-- .. end Post -->
                    <?php } ?>
                <?php else: ?>
                    <div class="ui-block responsive-flex">
                        <div class="ui-block-title">
                            <div class="h6 title align-center">No post update yet.</div>
                        </div>
                    </div>

                <?php endif; ?>
            </div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Details</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
                            <span class="text">
                                <?php
                                if ($pengguna['BIO'] != "") {
                                    echo $pengguna['BIO'];
                                } else {
                                    echo "Bio doesn't update yet.";
                                }
                                ?>
                            </span>
						</li>
                        <li>
                            <span class="title">Personality:</span>
                            <span class="text">
                                <?php
                                if ($pengguna['IDKEPRIBADIAN'] != "") {
                                    echo $profile_service->getPersonalityName($pengguna['IDKEPRIBADIAN'])['NAMAKEPRIBADIAN'];
                                } else {
                                    echo "Personality doesn't update yet.";
                                }
                                ?>
                            </span>
                        </li>
                        <li>
                            <span class="title">DOB:</span>
                            <span class="text"><?php echo date('d-m-Y', strtotime($pengguna['TANGGALLAHIR'])); ?></span>
                        </li>
					</ul>

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

<!--					<div class="widget w-socials">-->
<!--						<h6 class="title">Other Social Networks:</h6>-->
<!--						<a href="#" class="social-item bg-facebook">-->
<!--							<i class="fab fa-facebook-f" aria-hidden="true"></i>-->
<!--							Facebook-->
<!--						</a>-->
<!--						<a href="#" class="social-item bg-twitter">-->
<!--							<i class="fab fa-twitter" aria-hidden="true"></i>-->
<!--							Twitter-->
<!--						</a>-->
<!--						<a href="#" class="social-item bg-dribbble">-->
<!--							<i class="fab fa-dribbble" aria-hidden="true"></i>-->
<!--							Dribbble-->
<!--						</a>-->
<!--					</div>-->

					<!-- ... end W-Socials -->
				</div>
			</div>

		</div>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Photo -->

					<ul class="widget w-last-photo js-zoom-gallery">
                        <?php foreach ($profile_service->getSelfPhotos($pengguna['IDPENGGUNA']) as $photo) { ?>
                            <li>
                                <a href="#">
                                    <img src="<?php echo Yii::getAlias('@fileUrl') ?>/post/<?php echo $photo['GAMBARPOST']; ?>" alt="user">
                                </a>
                            </li>
                        <?php } ?>
					</ul>


					<!-- .. end W-Latest-Photo -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Followers (<?php echo $profile_service->countFollowers($pengguna['IDPENGGUNA']); ?>)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->

					<ul class="widget w-faved-page js-zoom-gallery">
                        <?php foreach ($profile_service->getFollowers($pengguna['IDPENGGUNA'], 2) as $follower) { ?>
                            <li>
                                <a href="#">
                                    <img width="45" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar38-sm.jpg" alt="author">
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($profile_service->countFollowers($pengguna['IDPENGGUNA']) - 10 > 0): ?>
						<li class="all-users">
							<a href="#">+<?php echo $profile_service->countFollowers($pengguna['IDPENGGUNA']) - 10; ?></a>
						</li>
                        <?php endif; ?>
					</ul>

					<!-- .. end W-Faved-Page -->
				</div>
			</div>

		</div>

		<!-- ... end Right Sidebar -->

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
					<form action="<?php echo Yii::$app->request->BaseUrl; ?>/pengguna/fotoheader?id=<?php echo $_SESSION['id']?>" method="post" enctype="multipart/form-data">
						<?php
                          echo  Html::hiddenInput(
                              Yii::$app->request->csrfParam,
                              Yii::$app->request->csrfToken
                          );
						?>
						
						<label for="input-profile">
							<svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
							<h6>Upload Photo</h6>
							<span>Browse your computer.</span>
						</label>

						<input type="file" id="input-profile"  name="FOTO" style="display:none;"/><br>
						<button type="submit" class="btn btn-success" >Upload</button>

					</form>
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

<!-- window-popup profile foto -->
<div class="modal fade" id="update-profile-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Profile Photo</h6>
			</div>
			<div class="modal-body">
                <div class="image-upload upload-photo-item">
					<form action="<?php echo Yii::$app->request->BaseUrl; ?>/pengguna/update?id=<?php echo $_SESSION['id']?>" method="post" enctype="multipart/form-data">
						<?php
                          echo  Html::hiddenInput(
                              Yii::$app->request->csrfParam,
                              Yii::$app->request->csrfToken
                          );
						?>
						
						<label for="input-profile">
							<svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
							<h6>Upload Photo</h6>
							<span>Browse your computer.</span>
						</label>

						<input type="file" id="input-profile"  name="FOTO" style="display:none;"/><br>
						<button type="submit" class="btn btn-success" >Upload</button>

					</form>
                </div>

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
								</figcaption>BaseUrl
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

