<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hobi */

$this->title = 'Create Hobi';
$this->params['breadcrumbs'][] = ['label' => 'Hobis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hobi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
