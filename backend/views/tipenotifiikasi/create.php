<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipenotifiikasi */

$this->title = 'Create Tipenotifiikasi';
$this->params['breadcrumbs'][] = ['label' => 'Tipenotifiikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipenotifiikasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
