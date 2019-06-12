<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kepribadian */

$this->title = 'Create Kepribadian';
$this->params['breadcrumbs'][] = ['label' => 'Kepribadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kepribadian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
