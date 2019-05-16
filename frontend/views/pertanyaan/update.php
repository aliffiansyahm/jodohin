<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pertanyaan */

$this->title = 'Update Pertanyaan: ' . $model->IDPERTANYAAN;
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDPERTANYAAN, 'url' => ['view', 'id' => $model->IDPERTANYAAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertanyaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
