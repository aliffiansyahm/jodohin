<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Komentar;
use frontend\services\ProfileService;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$session  = Yii::$app->session;
$this->title = 'Posts';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-12">
    <div class="ui-block">
      <div class="ui-block-content">
          <div class="news-feed-form">
              <!-- Nav tabs -->

              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                      <form method="post" action="<?php echo Yii::$app->request->BaseUrl; ?>/post/store" enctype="multipart/form-data">
                          <?php
                          echo  Html::hiddenInput(
                              Yii::$app->request->csrfParam,
                              Yii::$app->request->csrfToken
                          );
                          ?>
                          <div class="author-thumb">
                              <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">
                          </div>
                          <div class="form-group with-icon label-floating is-empty">
                              <label class="control-label">Share what you are thinking here...</label>
                              <textarea class="form-control" placeholder="" name="CAPTION"></textarea>
                          </div>
                          <div class="add-options-message image-upload-post">
                              <label for="file-input">
                                  <span href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                                      <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                                  </span>
                              </label>
                              <input id="file-input" type="file" name="file_gambar">

                              <button class="btn btn-primary btn-md-2" type="submit">Post</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      </div>
  </div>
  </div>
  <?php  foreach ($postingan as $nilai) { ?>
  <div class="col col-xl-6 col-lg-12 col-md- col-sm-12 col-12">
    <div class="ui-block">
      <div class="ui-block-title">
        <div class="post__author author vcard inline-items">
          <img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/author-page.jpg" alt="author">

          <div class="author-date">
            <a class="h6 postCreate command can be used directly as follows : __author-name fn" href="<?php echo Yii::$app->request->BaseUrl ?>/profile"><?php echo $nilai['NAMA'] ?></a>
              <?php if ($nilai['GAMBARPOST'] != "") { echo "shared photo"; } ?>
              <div class="post__date">
              <time class="published" datetime="2017-03-24T18:18">
                  at <?php echo date('d-m-Y', strtotime($nilai['WAKTUPOST'])); ?>
              </time>
            </div>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
            <ul class="more-dropdown">
              <li>
                <a href="<?php echo Yii::$app->request->BaseUrl ?>/post/update?id=<?php echo $nilai["IDPOST"]?>">Edit Post</a>
              </li>
              <li>
                <a href="<?php echo Yii::$app->request->BaseUrl ?>/post/delete?id=<?php echo $nilai["IDPOST"]?>">Delete Post</a>
              </li>
            </ul>
          </div>

        </div>
        <!-- <h6 class="title">Post</h6> -->
      </div>
      <div class="ui-block-content">
        <article class="hentry post has-post-thumbnail">

        <p><?php echo $nilai["CAPTION"]; ?>
        </p>
        <a href="<?php echo Yii::$app->request->BaseUrl ?>/post/view?id=<?php echo $nilai["IDPOST"]?>">
          <div class="post-thumb">
              <?php if ($nilai['GAMBARPOST'] != ""): ?>
                  <div class="post-thumb">
                      <img src="<?php echo Yii::$app->request->BaseUrl ?>/foto/post/<?=$nilai['GAMBARPOST'] ?>" alt="photo">
                  </div>
              <?php endif; ?>
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
              <?php
              $dataKomentar = KOMENTAR::find()
                            ->where(['IDPOST' => $nilai["IDPOST"]])
                            ->all();
              $jum = 0;
              foreach ($dataKomentar as $nilai) {
                $jum = $jum + 1;
              }
              ?>
              <span><?php echo $jum; ?></span>
            </a>
          </div>


        </div>

        <!-- <div class="control-block-button post-control-button">

          <a href="#" class="btn btn-control">
            <svg class="olymp-like-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
          </a>

          <a href="#" class="btn btn-control">
            <svg class="olymp-comments-post-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
          </a>

          <a href="#" class="btn btn-control">
            <svg class="olymp-share-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
          </a>

        </div> -->

      </article>

      </div>
    </div>
  </div>
<?php } ?>
</div>

<!-- <div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <div class="row">
      <?php foreach ($postingan as $nilai) { ?>
      <div class="col-xs-12 col-md-3">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="<?php echo Yii::$app->request->BaseUrl ?>/fotopost/<?php echo $nilai['GAMBARPOST']; ?>" alt="post gambar" style="width:100%">
          <div class="card-body">
            <p class="card-text"><?php echo $nilai["CAPTION"]; ?></p>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/post/view?id=<?php echo $nilai["IDPOST"]?>" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <?= Html::a('Kembali ke home', ['/profile'], ['class' => 'btn btn-primary']) ?>
</div> -->
