<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pertanyaan */

$this->title = 'Create Pertanyaan';
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
