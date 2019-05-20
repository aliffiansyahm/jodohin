<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tipenotifiikasi */

$this->title = 'Update Tipenotifiikasi: ' . $model->IDTYPENOTIFIKASI;
$this->params['breadcrumbs'][] = ['label' => 'Tipenotifiikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDTYPENOTIFIKASI, 'url' => ['view', 'id' => $model->IDTYPENOTIFIKASI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipenotifiikasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
