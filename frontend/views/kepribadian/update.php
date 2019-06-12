<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\kepribadian */

$this->title = 'Update Kepribadian: ' . $model->IDKEPRIBADIAN;
$this->params['breadcrumbs'][] = ['label' => 'Kepribadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDKEPRIBADIAN, 'url' => ['view', 'id' => $model->IDKEPRIBADIAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kepribadian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
