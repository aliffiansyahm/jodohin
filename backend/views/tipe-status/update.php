<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TipeStatus */

$this->title = 'Update Tipe Status: ' . $model->IDSTATUS;
$this->params['breadcrumbs'][] = ['label' => 'Tipe Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDSTATUS, 'url' => ['view', 'id' => $model->IDSTATUS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipe-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
