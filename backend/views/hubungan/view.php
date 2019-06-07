<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Hubungan */

$this->title = $model->IDHUBUNGAN;
$this->params['breadcrumbs'][] = ['label' => 'Hubungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hubungan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDHUBUNGAN], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDHUBUNGAN], [
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
            'IDHUBUNGAN',
            'IDSTATUS',
            'IDPENGGUNA1',
            'IDPENGGUNA2',
        ],
    ]) ?>

</div>
