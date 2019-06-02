<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TipePesan */

$this->title = $model->IDTIPEPESAN;
$this->params['breadcrumbs'][] = ['label' => 'Tipe Pesans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tipe-pesan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDTIPEPESAN], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDTIPEPESAN], [
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
            'IDTIPEPESAN',
            'NAMATIPEPESAN',
        ],
    ]) ?>

</div>
