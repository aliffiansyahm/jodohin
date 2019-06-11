<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */

$this->title = 'Update Post';
//$this->do = "update";
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDPOST, 'url' => ['view', 'id' => $model->IDPOST]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
