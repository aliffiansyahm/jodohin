<?php
use frontend\models\Hubungan;
?>
<div class="row">
<?php
$ada = Hubungan::find()
->all();
$i=0;
foreach ($ada as $nilai) {
 if($nilai['IDPENGGUNA1']==$_SESSION['id']){
    $ada[$i] = $nilai['IDPENGGUNA2']+1-1;
    // echo $ada[$i];
    $i++;
 }
}
?>
<?php foreach ($dataJodoh as $nilai): ?>
  <?php
  $ketemu = 0;
  $j=0;
  foreach ($ada as $cek) {
    if($nilai['IDPENGGUNA'] == $cek['IDPENGGUNA2']){
      $ketemu = 1;
    }
    $j++;
  }
  if($ketemu==0){ ?>
    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
  			<div class="ui-block">

  				<!-- Friend Item -->

  				<div class="friend-item">
  					<div class="friend-header-thumb">
  						<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/friend1.jpg" alt="friend">
  					</div>

  					<div class="friend-item-content">

  						<div class="more">
  							<!-- <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg> -->
  							<ul class="more-dropdown">
  								<li>
  									<a href="#">Report Profile</a>
  								</li>
  								<li>
  									<a href="#">Block Profile</a>
  								</li>
  								<li>
  									<a href="#">Turn Off Notifications</a>
  								</li>
  							</ul>
  						</div>
  						<div class="friend-avatar">
  							<div class="author-thumb">
  								<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/avatar1.jpg" alt="author">
  							</div>
  							<div class="author-content">
  								<a href="#" class="h5 author-name"><?php echo $nilai['NAMA']; ?></a>
  							</div>
  						</div>

  						<div class="swiper-container" data-slide="fade">
  							<div class="swiper-wrapper">
  								<div class="swiper-slide">
  									<div class="friend-count" data-swiper-parallax="-500">
  										<a href="#" class="friend-count-item">
                        <?php
                        $count = (new \yii\db\Query())
                          ->from('POST')
                          ->where(['IDPENGGUNA' => $nilai['IDPENGGUNA']])
                          ->count();
                        ?>
  											<div class="h6"><?php echo $count ?></div>
  											<div class="title">Post</div>
  										</a>
  									</div>
  									<div class="control-block-button" data-swiper-parallax="-100">
  										<a href="<?php echo Yii::$app->request->BaseUrl ?>/profile/colek?id=<?php echo $nilai['IDPENGGUNA']; ?>" class="btn btn-control bg-purple">
  											<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
  										</a>

  									</div>
  								</div>

  								<div class="swiper-slide">
  									<p class="friend-about" data-swiper-parallax="-500">
  										<?php echo $nilai['BIO']; ?>
  									</p>

  								</div>
  							</div>

  							<!-- If we need pagination -->
  							<div class="swiper-pagination"></div>
  						</div>
  					</div>
  				</div>

  				<!-- ... end Friend Item -->			</div>
  		</div>
  <?php } ?>

<?php endforeach; ?>
</div>
