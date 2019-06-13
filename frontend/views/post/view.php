<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Komentar;
use yii\widgets\ActiveForm;
use frontend\models\Pengguna;
$session = Yii::$app->session;
/* @var $this yii\web\View */
/* @var $model frontend\models\Post */

$this->title = $model->IDPOST;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ui-block">
  <div class="ui-block-title">
    <h6 class="title">Lihat Post &nbsp &nbsp
        <?= Html::a('Lihat semua post', ['index'], ['class' => ['btn btn-primary', 'align-left']]) ?>
    </h6>
  </div>
  <div class="ui-block-content">
      <article class="hentry post has-post-thumbnail">



      <p><?php echo $model->CAPTION; ?>
      </p>
      <a href="<?php echo Yii::$app->request->BaseUrl ?>/post/view?id=<?php echo $model->IDPOST; ?>">
        <div class="post-thumb">
          <?= Html::img(Yii::getAlias('@fileUrl').'/post/'.$model->GAMBARPOST);?>
          <!-- <img src="<?php echo Yii::$app->request->BaseUrl ?>/fotopost/<?php echo $model->GAMBARPOST; ?>" alt="photo"> -->
        </div>
      </a>

      <div class="post-additional-info inline-items">

        <a href="#" class="post-add-icon inline-items">
          <svg class="olymp-heart-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
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
          <br>47 more liked this
        </div>


        <div class="comments-shared">
          <a href="#" class="post-add-icon inline-items">
            <svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
            <?php $jum=0; ?>
            <?php foreach ($dataKomentar as $nilai) {
                $jum = $jum + 1;
            } ?>
            <span><?php echo $jum; ?></span>
          </a>
        </div>


      </div>

      <div class="control-block-button post-control-button">
          <?php if ($model->IDPENGGUNA == $_SESSION['id']): ?>
            <a href="delete?id=<?php echo $model->IDPOST; ?>" class="btn btn-control">
              <svg class="olymp-like-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </a>
          <?php endif; ?>
      </div>

    </article>
    <!-- start commen -->
    <ul class="comments-list">
      <?php foreach ($dataKomentar as $nilai) { ?>
			<li class="comment-item">
				<div class="post__author author vcard inline-items">
					<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
            <?php
            $orang = Pengguna::findOne(['IDPENGGUNA' => $nilai['IDPENGGUNA']]);
            ?>
						<div class="author-date">
						   <a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo $orang['NAMA'] ?></a>
								<!-- <div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										38 mins ago
									</time>
								</div> -->
						</div>
				</div>
					<p><?php echo $nilai['ISIKOMENTAR'] ?></p>
		</li>
    <?php } ?>
	</ul>
        <!-- end commet -->
        <!-- Comment Form  -->
        <!-- <form action="buatKomen" method="get">
          <input type="hidden" name="idpengguna" value="<?php echo $session['id']; ?>">
          <input type="hidden" name="idpost" value="<?php echo Yii::$app->request->get('id'); ?>">
          <textarea name="isikomen" rows="8" cols="80"></textarea>
          <div class="ui-block-content">
              <input type="submit" value="Submit" class="btn btn-secondary btn-lg">
          </div>
        </form> -->
				<form action="buatkomen" method="get" class="comment-form inline-items">
          <input type="hidden" name="idpengguna" value="<?php echo $session['id']; ?>">
          <input type="hidden" name="idpost" value="<?php echo Yii::$app->request->get('id'); ?>">
					<div class="post__author author vcard inline-items">
						<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">

						<div class="form-group with-icon-right ">
							<textarea name="isikomen" class="form-control" placeholder=""></textarea>
						</div>
					</div>
					<button class="btn btn-md-2 btn-primary">Post Comment</button>

					<!-- <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button> -->

				</form>

				<!-- ... end Comment Form  -->

  </div>
</div>
<!-- <div class="post-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDPOST], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDPOST], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo $model->WAKTUPOST; ?><br>
    <img src="<?php echo Yii::$app->request->BaseUrl ?>/fotopost/<?php echo $model->GAMBARPOST; ?>" alt="gambar kosong" width="200"><br>
    <?php echo $model->CAPTION; ?><br>
    <?= Html::a('Lihat semua Post', ['index'], ['class' => 'btn btn-primary']) ?>

</div> -->
