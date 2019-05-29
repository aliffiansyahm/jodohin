<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hobi */

$this->title = 'Update Hobi: ' . $model->IDHOBI;
$this->params['breadcrumbs'][] = ['label' => 'Hobis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDHOBI, 'url' => ['view', 'id' => $model->IDHOBI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hobi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
