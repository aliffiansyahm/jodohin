<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hubungan */

$this->title = 'Update Hubungan: ' . $model->IDHUBUNGAN;
$this->params['breadcrumbs'][] = ['label' => 'Hubungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDHUBUNGAN, 'url' => ['view', 'id' => $model->IDHUBUNGAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hubungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'pengguna' => $pengguna,
        'tipeHubungan' => $tipeHubungan,
    ]) ?>

</div>
