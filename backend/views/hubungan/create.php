<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hubungan */

$this->title = 'Create Hubungan';
$this->params['breadcrumbs'][] = ['label' => 'Hubungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hubungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'pengguna' => $pengguna,
        'tipeHubungan' => $tipeHubungan,
    ]) ?>

</div>
