<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Notifikasi */

$this->title = 'Create Notifikasi';
$this->params['breadcrumbs'][] = ['label' => 'Notifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifikasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipeNotifikasi' => $tipeNotifikasi,
        'pengguna' => $pengguna,
    ]) ?>

</div>
