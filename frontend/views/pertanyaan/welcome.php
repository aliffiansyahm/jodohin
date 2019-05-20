<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PertanyaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Selamat datang di pertanyaan kepribadian';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('MULAI', ['kerjakan'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
</div>
