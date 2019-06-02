<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengguna */

$this->title = $model->IDPENGGUNA;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengguna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDPENGGUNA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDPENGGUNA], [
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
            'IDPENGGUNA',
            //'IDKEPRIBADIAN',
            //'EMAIL:email',
            //'PASSWORD',
            'NAMA',
            'TANGGALLAHIR',
            'ALAMAT',
            'BIO',
            //'FOTO',
            'JENISKELAMIN',
        ],
    ]) ?>

</div>
