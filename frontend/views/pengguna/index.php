<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPENGGUNA',
            'IDKEPRIBADIAN',
            'EMAIL:email',
            'PASSWORD',
            'NAMA',
            'TANGGALLAHIR',
            'ALAMAT',
            'BIO',
            'FOTO',
            'JENISKELAMIN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
