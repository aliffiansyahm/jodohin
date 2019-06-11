<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Komentar */

$this->title = $model->IDKOMENTAR;
$this->params['breadcrumbs'][] = ['label' => 'Komentars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="komentar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDKOMENTAR], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDKOMENTAR], [
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
            'IDKOMENTAR',
            'IDPENGGUNA',
            'IDPOST',
            'ISIKOMENTAR',
            'WAKTUKOMENTAR',
        ],
    ]) ?>

</div>
