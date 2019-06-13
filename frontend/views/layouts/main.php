<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\services\MainServices;

$session  = Yii::$app->session;
/*
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
*/
?>
<?php if(Yii::$app->controller->action->id!='landing') { ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Olympus Shortcodes</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
 	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/main.min.css">
<style>
    .image-upload-post > input
    {
        display: none;
    }

    .image-upload-post img
    {
        width: 80px;
        cursor: pointer;
    }
</style>
	<!-- Main Font -->
	<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/fonts.min.css">

</head>
<body>
<?php
$main_services = new MainServices();
$pengguna = $main_services->getUserDetails($_SESSION['id']);
?>
<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile" class="logo">
			<div class="img-wrap">
				<img width="50px" height="50px" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/post">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="POST"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/find">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/pesan/simulasi">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="SIMULASICHAT"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>

					</a>
				</li>
				<li>
					<a href="<?php Yii::$app->request->BaseUrl ?>/profile/followers">
						<svg class="olymp-heart-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FOLLOWERS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
					</a>
				</li>
				<li>
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/18-MusicAndPlaylists.html">-->
<!--						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/19-WeatherWidget.html">-->
<!--						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/20-CalendarAndEvents-MonthlyCalendar.html">-->
<!--						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/24-CommunityBadges.html">-->
<!--						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/25-FriendsBirthday.html">-->
<!--						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/26-Statistics.html">-->
<!--						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/27-ManageWidgets.html">-->
<!--						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="--><?php //echo Yii::$app->request->BaseUrl ?><!--/olympus/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>-->
<!--					</a>-->
<!--				</li>-->
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile" class="logo">
			<div class="img-wrap">
				<img width="50px" height="50px"  src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Jodohin</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/post">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="Post"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">Post</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/find">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/pesan/simulasi">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="SIMULASICHAT"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/18-MusicAndPlaylists.html">
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/19-WeatherWidget.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/20-CalendarAndEvents-MonthlyCalendar.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/24-CommunityBadges.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/25-FriendsBirthday.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/26-Statistics.html">
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/27-ManageWidgets.html">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="profile-completion">

				<div class="skills-item">
					<div class="skills-item-info">
						<span class="skills-item-title">Profile Completion</span>
						<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
					</div>
					<div class="skills-item-meter">
						<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
					</div>
				</div>

				<span>Complete <a href="#">your profile</a> so people can know more about you!</span>

			</div>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open">
			<img width="50px" height="50px" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap">
				<img width="50px" height="50px" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Jodohin</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<?php if (isset($_SESSION['foto'])) { ?>
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/foto/profile/1.png?>" class="friend-avatar author-thumb" alt="author">
						<?php } else { ?>
						<img alt="author" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" class="avatar">
						<span class="icon-status online"></span>
						<?php } ?>
					</div>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index" class="author-name fn">
						<div class="author-title">
							d<?php echo $session['nama']; ?>s
							 <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
						</div>
						<span class="author-subtitle">SPACE COWBOY</span>
					</a>
				</div>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">MAIN SECTIONS</h6>
			</div>

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/post">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/find">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/mobile-29-YourAccount-AccountSettings.html">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-30-YourAccount-ChangePassword.html">
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-31-YourAccount-HobbiesAndInterests.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-32-YourAccount-EducationAndEmployement.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-33-YourAccount-Notifications.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-34-YourAccount-ChatMessages.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Mobile-35-YourAccount-FriendsRequests.html">
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/#">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">

				<li>
					<a href="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/keluar">
						<svg class="olymp-logout-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">
                <?php foreach ($main_services->getFollowers($_SESSION['id']) as $follower) { ?>
                    <?php if ($main_services->getMutualFollowers($_SESSION['id'], $follower['IDPENGIKUT']) != ""): ?>

                        <li class="inline-items js-chat-open">
                            <div class="author-thumb">
                                <?php if ($follower['FOTO'] == ""): ?>
                                    <img width="45" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author" class="avatar">
                                <?php else: ?>
                                    <img width="45" src="<?php echo Yii::$app->request->BaseUrl ?>/foto/post/1.png" alt="author">
                                <?php endif; ?>
                                <span class="icon-status online"></span>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php } ?>
			</ul>
		</div>

		<div class="search-friend inline-items">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
                <?php foreach ($main_services->getFollowers($_SESSION['id']) as $follower) { ?>
                    <?php if ($main_services->getMutualFollowers($_SESSION['id'], $follower['IDPENGIKUT']) != ""): ?>
                    <li class="inline-items js-chat-open">
                        <div class="author-thumb">
                            <?php if ($follower['FOTO'] == ""): ?>
                                <img width="45" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-main1.jpg" alt="author" class="avatar">
                            <?php else: ?>
                                <img width="45" src="<?php echo Yii::$app->request->BaseUrl ?>/foto/post/1.png" alt="author">
                            <?php endif; ?>
                            <span class="icon-status online"></span>
                        </div>

                        <div class="author-status">
                            <a href="#" class="h6 author-name"><?php echo $follower['NAMA'] ; ?></a>
                            <span class="status">ONLINE</span>
                        </div>

                        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

                            <ul class="more-icons">
                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                </li>

                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
                                </li>

                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
                                </li>
                            </ul>

                        </div>

                    </li>
                    <?php endif; ?>
                <?php } ?>
			</ul>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">JODOHIN CHAT</h6>
			<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<div class="fixed-sidebar right fixed-sidebar-responsive">

	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

</div>

<!-- ... end Fixed Sidebar Right-Responsive -->

<!-- Header-BP -->

<header class="header" id="site-header">
	<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile">
	<div class="page-title">
		<h6>JODOHIN</h6>
	</div>
	</a>
	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<a href="#" class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<!-- <a href="#">Settings</a> -->
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<?php foreach ($main_services->bacaColek() as $colekan) { ?>
								<?php $data = $main_services->bacaUser($colekan['IDPENGIRIMNOTIF']); ?>
								<li>
									<div class="author-thumb">
										<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar55-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA']; ?></a>
										<span class="chat-message-item"><?php echo $colekan['ISI']; ?></span>
									</div>
									<span class="notification-icon">
										<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/terimacolek?id=<?php echo $colekan['IDNOTIFIKASI'] ?>" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/tolakcolek?id=<?php echo $colekan['IDNOTIFIKASI'] ?>" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

									<!-- <div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									</div> -->
								</li>
							<?php } ?>
						</ul>
					</div>

					<!-- <a href="#" class="view-all bg-blue">Check all your Events</a> -->
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
				<div class="label-avatar bg-purple">2</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<!-- <a href="#">Mark all as read</a>
						<a href="#">Settings</a> -->
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
								<?php foreach ($main_services->bacaNotifPesan() as $notifPesan) { ?>
									<?php $data = $main_services->bacaUser($notifPesan['IDPENGIRIMNOTIF']); ?>
							<li class="message-unread">

								<div class="author-thumb">
									<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar59-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA'] ?></a>
									<span class="chat-message-item"><?php echo $notifPesan['ISI'] ?></span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div><a href="<?php echo Yii::$app->request->BaseUrl ?>/pesan/loadchat?id=<?php echo $data['IDPENGGUNA'] ?>">
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
								</a>
								<!-- <div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div> -->

							</li>

						<?php } ?>
						</ul>
					</div>

				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>

				<div class="label-avatar bg-primary">10</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<!-- <a href="#">Mark all as read</a>
						<a href="#">Settings</a> -->
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
								<?php foreach ($main_services->bacaNotifLain() as $notifLain) { ?>
									<?php $data = $main_services->bacaUser($notifLain['IDPENGIRIMNOTIF']); ?>
							<li>
								<div class="author-thumb">
									<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar62-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA'] ?> </a> <?php echo $notifLain['ISI'] ?> </div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18"><?php echo $notifLain['WAKTUNOTIFIKASI'] ?></time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="more">
									<!-- <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg> -->
									<svg class="olymp-little-delete"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>
						<?php } ?>
						</ul>
					</div>

					<!-- <a href="#" class="view-all bg-primary">View All Notifications</a> -->
				</div>
			</div>

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
						<?php if (isset($pengguna['FOTO'])) { ?>
							<img width="45" height="45" src="<?php echo Yii::getAlias('@fileUrl') ?>/profile/<?php echo $pengguna['FOTO']?>" class="avatar" alt="author">
						<?php } else { ?>
						<img alt="author" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" class="avatar">
						<span class="icon-status online"></span>
						<?php } ?>

					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/29-YourAccount-AccountSettings.html">

										<svg class="olymp-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/keluar">
										<svg class="olymp-logout-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

										<span>Log Out</span>
									</a>
								</li>
							</ul>

						</div>

					</div>
				</div>
				<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index" class="author-name fn">
					<div class="author-title">
							<?php echo $session['nama']; ?>
						<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
					</div>
					<span class="author-subtitle">SPACE COWBOY</span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Pemintaan Hubungan</h6>
				</div>
				<ul class="notification-list friend-requests">
					<?php foreach ($main_services->bacaColek() as $colekan) { ?>
						<?php $data = $main_services->bacaUser($colekan['IDPENGIRIMNOTIF']); ?>
					<li>
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar55-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA'] ?></a>
							<span class="chat-message-item"><?php echo $colekan['ISI'] ?></span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<!-- <div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div> -->
					</li>
				<?php } ?>
				</ul>
				<!-- <a href="#" class="view-all bg-blue">Check all your Events</a> -->
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<!-- <a href="#">Mark all as read</a>
					<a href="#">Settings</a> -->
				</div>

				<ul class="notification-list chat-message">
					<?php foreach ($main_services->bacaNotifPesan() as $notifPesan) { ?>
						<?php $data = $main_services->bacaUser($notifPesan['IDPENGIRIMNOTIF']); ?>
					<li class="message-unread">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar59-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA'] ?></a>
							<span class="chat-message-item"><?php $notifPesan['ISI'] ?></span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div><a href="<?php echo Yii::$app->request->BaseUrl ?>/pesan/loadchat?id=<?php echo $data['IDPENGGUNA'] ?>">
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span></a>
					</li>
				<?php } ?>
				</ul>

				<!-- <a href="#" class="view-all bg-purple">View All Messages</a> -->
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<!-- <a href="#">Mark all as read</a>
					<a href="#">Settings</a> -->
				</div>

				<ul class="notification-list">
							<?php foreach ($main_services->bacaNotifLain() as $notifLain) { ?>
								<?php $data = $main_services->bacaUser($notifLain['IDPENGIRIMNOTIF']); ?>
					<li class="un-read">
						<div class="author-thumb">
							<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar62-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/index?id=<?php echo $data['IDPENGGUNA'] ?>" class="h6 notification-friend"><?php echo $data['NAMA']; ?></a> <?php echo $notifLain['ISI'] ?> </div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18"><?php echo $notifLain['WAKTUNOTIFIKASI'] ?></time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

						<div class="more">
							<!-- <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg> -->
							<svg class="olymp-little-delete"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>
				<?php } ?>
				</ul>

				<!-- <a href="#" class="view-all bg-primary">View All Notifications</a> -->
			</div>

		</div>

		<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>



<!-- Main Content -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <?php } ?>
      <?= $content ?>
      <!-- PAKE TEMPLETE DI ATAS UNTUK MEMBUAT CONTEN DI BAWAH ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇ -->
      <!-- <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Color Palette</h6>
        </div>
        <div class="ui-block-content">

        </div> -->

      <!-- PAKE TEMPLETE DI ATAS UNTUK MEMBUAT CONTEN DI BAWAH ⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆ -->
      <?php if(Yii::$app->controller->action->id!='landing') { ?>
		</div>
	</div>
</div>

<!-- ...end Main Content -->



<a class="back-to-top" href="#">
	<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<!-- <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg> -->
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
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!</span>
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
				</ul>
			</div>

			<form class="need-validation">
    		<div class="form-group label-floating is-empty">
    			<label class="control-label">Press enter to post...</label>
    			<textarea class="form-control" placeholder=""></textarea>
    			<div class="add-options-message">
    				<!-- <a href="#" class="options-message">
    					<svg class="olymp-computer-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
    				</a> -->
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


<!-- JS Scripts -->
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery-3.2.1.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.appear.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.mousewheel.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/perfect-scrollbar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.matchHeight.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/svgxuse.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Headroom.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/velocity.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ScrollMagic.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.waypoints.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.countTo.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/popper.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/material.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/bootstrap-select.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/smooth-scroll.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/selectize.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/swiper.jquery.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/moment.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/daterangepicker.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/simplecalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/fullcalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/isotope.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ajax-pagination.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/circle-progress.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/loader.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/run-chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.magnific-popup.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.gifplayer.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-and-player.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/base-init.js"></script>
<script defer src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/fonts/fontawesome-all.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>
<?php } ?>
