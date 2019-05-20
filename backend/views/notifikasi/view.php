<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Notifikasi */

$this->title = $model->IDNOTIFIKASI;
$this->params['breadcrumbs'][] = ['label' => 'Notifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="notifikasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDNOTIFIKASI], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDNOTIFIKASI], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDNOTIFIKASI',
            'IDPENGIRIMNOTIF',
            'tYPENOTIFIKASI.TIPENOTIFIKASI',
            'IDPENERIMANOTIF',
            'ISI',
            'WAKTUNOTIFIKASI',
            'STATUSNOTIFIKASI',
        ],
    ]) ?>

</div>
