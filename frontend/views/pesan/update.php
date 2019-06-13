<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pesan */

$this->title = 'Update Pesan: ' . $model->IDPESAN;
$this->params['breadcrumbs'][] = ['label' => 'Pesans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDPESAN, 'url' => ['view', 'id' => $model->IDPESAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
