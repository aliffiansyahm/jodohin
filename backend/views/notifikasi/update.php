<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Notifikasi */

$this->title = 'Update Notifikasi: ' . $model->IDNOTIFIKASI;
$this->params['breadcrumbs'][] = ['label' => 'Notifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDNOTIFIKASI, 'url' => ['view', 'id' => $model->IDNOTIFIKASI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notifikasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipeNotifikasi' => $tipeNotifikasi,
        'pengguna' => $pengguna,
    ]) ?>

</div>
