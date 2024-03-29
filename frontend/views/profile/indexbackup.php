<!-- Top Header-Profile -->

<?php 
    use yii\helpers\Url;
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
										<a href="02-ProfilePage.html" class="active">Timeline</a>
									</li>
									<li>
										<a href="05-ProfilePage-About.html">About</a>
									</li>
									<li>
										<a href="06-ProfilePage.html">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="07-ProfilePage-Photos.html">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.html">Videos</a>
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
                            <?php if (!isset($_SESSION['idkepribadian'])) { ?>
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
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.html" class="h4 author-name"><?php echo $_SESSION['nama']?></a>
							<div class="country">San Francisco, CA</div>
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

				<div class="ui-block">
					<!-- Post -->
					
					<article class="hentry post">
					
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											19 hours ago
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
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
					
							</div>
					
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
								pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
								mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								accusantium doloremque.
							</p>
					
							<div class="post-additional-info inline-items">
					
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="/<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>8</span>
								</a>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
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
					
							<div class="control-block-button post-control-button">
					
								<a href="#" class="btn btn-control featured-post">
									<svg class="olymp-trophy-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-trophy-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="<<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>
					
							</div>
					
						</article>
					
					<!-- .. end Post -->				</div>
				<div class="ui-block">
					
					<!-- Post -->
					
					<article class="hentry post video">
					
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a
									<a href="#">link</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											7 hours ago
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
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
					
							</div>
					
							<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>
					
							<div class="post-video">
								<div class="video-thumb">
									<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/video5.jpg" alt="photo">
									<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
										<svg class="olymp-play-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
										</svg>
									</a>
								</div>
					
								<div class="video-content">
									<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
									<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
									<a href="#" class="link-site">YOUTUBE.COM</a>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>15</span>
								</a>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
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
									<br>13 more liked this
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<span>1</span>
									</a>
					
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>16</span>
									</a>
								</div>
					
					
							</div>
					
							<div class="control-block-button post-control-button">
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>
					
							</div>
					
						</article>
					
					<!-- .. end Post -->				</div>
				<div class="ui-block">
					<!-- Post -->
					
					<article class="hentry post">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
					
							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
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
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>
					
						</div>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
						</p>
					
						<div class="post-additional-info inline-items">
					
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>36</span>
							</a>
					
							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic9.jpg" alt="friend">
									</a>
								</li>
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
								<a href="#">You</a>, <a href="#">Elaine</a> and
								<br>34 more liked this
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
					
						<div class="control-block-button post-control-button">
					
							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
								</svg>
							</a>
					
							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="/<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
								</svg>
							</a>
					
							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
								</svg>
							</a>
					
						</div>
					
					</article>
					
					<!-- .. end Post -->					
					<!-- Comments -->
					
					<ul class="comments-list">
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar10-sm.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											5 mins ago
										</time>
									</div>
								</div>
					
								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>
					
							</div>
					
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
					
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="comment-item has-children">
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar5-sm.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>
					
								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>
					
							</div>
					
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
								consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
								quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
							</p>
					
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>5</span>
							</a>
							<a href="#" class="reply">Reply</a>
					
							<ul class="children">
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar8-sm.jpg" alt="author">
					
										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													39 mins ago
												</time>
											</div>
										</div>
					
										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
											</svg>
										</a>
					
									</div>
					
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
										</svg>
										<span>2</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar2-sm.jpg" alt="author">
					
										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													24 mins ago
												</time>
											</div>
										</div>
					
										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
											</svg>
										</a>
					
									</div>
					
									<p>Excepteur sint occaecat cupidatat non proident.</p>
					
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
										</svg>
										<span>0</span>
									</a>
									<a href="#" class="reply">Reply</a>
					
								</li>
							</ul>
					
						</li>
					
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar4-sm.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>
					
								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>
					
							</div>
					
							<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
					
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>7</span>
							</a>
							<a href="#" class="reply">Reply</a>
					
						</li>
					</ul>
					
					<!-- ... end Comments -->
					<a href="#" class="more-comments">View more comments <span>+</span></a>
					
					<!-- Comment Form  -->
					
					<form class="comment-form inline-items">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
					
							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder=""></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
										<svg class="olymp-camera-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>
					
						<button class="btn btn-md-2 btn-primary">Post Comment</button>
					
						<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
					
					</form>
					
					<!-- ... end Comment Form  -->				</div>
				<div class="ui-block">
					<!-- Post -->
					
					<article class="hentry post has-post-thumbnail shared-photo">
					
							<div class="post__author author vcard inline-items">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared
									<a href="#">Diana Jameson</a>’s <a href="#">photo</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											7 hours ago
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
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
					
							</div>
					
							<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>
					
							<div class="post-thumb">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/post-photo6.jpg" alt="photo">
							</div>
					
							<ul class="children single-children">
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar8-sm.jpg" alt="author">
										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													16 hours ago
												</time>
											</div>
										</div>
									</div>
					
									<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
								</li>
							</ul>
					
							<div class="post-additional-info inline-items">
					
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>15</span>
								</a>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
								</ul>
					
								<div class="names-people-likes">
									<a href="#">Diana</a>, <a href="#">Nicholas</a> and
									<br>13 more liked this
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<span>0</span>
									</a>
					
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>16</span>
									</a>
								</div>
					
							</div>
					
							<div class="control-block-button post-control-button">
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>
					
							</div>
					
						</article>
					
					<!-- .. end Post -->				</div>
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
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
						</li>
						<li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
						</li>
						<li>
							<span class="title">Favourite Music Bands / Artists:</span>
							<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
						</li>
					</ul>
					
					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->
					
					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fab fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fab fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div>
					
					
					<!-- ... end W-Socials -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">James’s Badges</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Badges -->
					
					<ul class="widget w-badges">
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge1.png" alt="author">
								<div class="label-avatar bg-primary">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge4.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge3.png" alt="author">
								<div class="label-avatar bg-blue">4</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge6.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge11.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge8.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge10.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge13.png" alt="author">
								<div class="label-avatar bg-breez">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge7.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/badge12.png" alt="author">
							</a>
						</li>
					</ul>
					
					<!--.. end W-Badges -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">My Spotify Playlist</h6>
				</div>

				<!-- W-Playlist -->
				
				<ol class="widget w-playlist">
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/playlist6.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">The Past Starts Slow...</a>
							<a href="#" class="composition-author">System of a Revenge</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:22</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
				
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/playlist7.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">The Pretender</a>
							<a href="#" class="composition-author">Kung Fighters</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:48</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/playlist8.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Blood Brothers</a>
							<a href="#" class="composition-author">Iron Maid</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:06</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/playlist9.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Seven Nation Army</a>
							<a href="#" class="composition-author">The Black Stripes</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">6:17</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/playlist10.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Killer Queen</a>
							<a href="#" class="composition-author">Archiduke</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:40</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
				</ol>
				
				<!-- .. end W-Playlist -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Twitter Feed</h6>
				</div>

				<!-- W-Twitter -->
				
				<ul class="widget w-twitter">
					<li class="twitter-item">
						<div class="author-folder">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/twitter-avatar1.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>Tomorrow with the agency we will run 5 km for charity. Come and give us your support!
							<a href="#" class="link-post">#Daydream5K</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								2 hours ago
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/twitter-avatar1.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>Check out the new website of “The Bebop Bar”! <a href="#" class="link-post">bytle/thbp53f</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								16 hours ago
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/twitter-avatar1.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>The Sunday is the annual agency camping trip and I still haven’t got a tent
							<a href="#" class="link-post">#TheWild #Indoors</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								Yesterday
							</time>
						</span>
					</li>
				</ul>
				
				
				<!-- .. end W-Twitter -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Videos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Video -->
					
					<ul class="widget w-last-video">
						<li>
							<a href="https://vimeo.com/ondemand/viewfromabluemoon4k/147865858" class="play-video play-video--small">
								<svg class="olymp-play-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
								</svg>
							</a>
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/video8.jpg" alt="video">
							<div class="video-content">
								<div class="title">System of a Revenge - Hypnotize...</div>
								<time class="published" datetime="2017-03-24T18:18">3:25</time>
							</div>
							<div class="overlay"></div>
						</li>
						<li>
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
								<svg class="olymp-play-icon">
									<use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
								</svg>
							</a>
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/video7.jpg" alt="video">
							<div class="video-content">
								<div class="title">Green Goo - Live at Dan’s Arena</div>
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
							</div>
							<div class="overlay"></div>
						</li>
					</ul>
					
					<!-- .. end W-Latest-Video -->
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
						<li>
							<a href="img/last-photo10-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-photo10-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot11-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot11-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot12-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot12-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot13-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot13-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot14-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot14-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot15-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot15-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot16-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot16-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot17-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot17-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot18-large.jpg">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/last-phot18-large.jpg" alt="photo">
							</a>
						</li>
					</ul>
					
					
					<!-- .. end W-Latest-Photo -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Blog Posts</h6>
				</div>
				<!-- W-Blog-Posts -->
				
				<ul class="widget w-blog-posts">
					<li>
						<article class="hentry post">
				
							<a href="#" class="h4">My Perfect Vacations in South America and Europe</a>
				
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
				
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
				
						</article>
					</li>
					<li>
						<article class="hentry post">
				
							<a href="#" class="h4">The Big Experience of Travelling Alone</a>
				
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
				
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									March 18th, at 6:52pm
								</time>
							</div>
				
						</article>
					</li>
				</ul>
				
				<!-- .. end W-Blog-Posts -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (86)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->
					
					<ul class="widget w-faved-page js-zoom-gallery">
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar38-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar24-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar36-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar35-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar34-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar33-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar32-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar31-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar30-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar29-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar28-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar27-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar26-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar25-sm.jpg" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+74</a>
						</li>
					</ul>
					
					<!-- .. end W-Faved-Page -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Favourite Pages</h6>
				</div>

				<!-- W-Friend-Pages-Added -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar41-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">The Marina Bar</a>
							<span class="chat-message-item">Restaurant / Bar</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar42-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tapronus Rock</a>
							<span class="chat-message-item">Rock Band</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar43-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar44-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar45-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Crimson Agency</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar46-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mannequin Angel</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				</ul>
				
				<!-- .. end W-Friend-Pages-Added -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">James's Poll</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Pool -->
					
					<ul class="widget w-pool">
						<li>
							<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
						</li>
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Thomas Bale
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
										<span class="units">62%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
								</div>
					
								<div class="counter-friends">12 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic1.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic3.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic4.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic6.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#" class="all-users">+3</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Ben Robertson
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
										<span class="units">27%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
								</div>
								<div class="counter-friends">7 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
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
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic12.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic13.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Michael Streiton
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
										<span class="units">11%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
								</div>
					
								<div class="counter-friends">2 people voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic14.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend-harmonic15.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					
					<!-- .. end W-Pool -->
					<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
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
        <form action="<?php echo Url::to(['/pengguna/profilepictures', 'id' => $_SESSION['id']]);?>" method="post">
			<div class="modal-body">
                <div class="image-upload upload-photo-item file-field">
                    <label for="file-input">
                        <svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

                        <h6>Upload Photo</h6>
                        <span>Browse your computer.</span>
                    </label>

                    <input type="file" id="file-input"  name="profilepicture" style="display:none;"/>
                    <input type="submit" value="Upload">
                <!-- <a href="../" class="upload-photo-item">
                    
			    </a> -->
                </div>
				
				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                    <svg class="olymp-photos-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

                    <h6>Choose from My Photos</h6>
                    <span>Choose from your uploaded photos</span>
                </a>
        </form>
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
<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->