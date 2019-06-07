<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TipeStatus */

$this->title = $model->IDSTATUS;
$this->params['breadcrumbs'][] = ['label' => 'Tipe Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tipe-status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDSTATUS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDSTATUS], [
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
            'IDSTATUS',
            'NAMASTATUS',
        ],
    ]) ?>

</div>
