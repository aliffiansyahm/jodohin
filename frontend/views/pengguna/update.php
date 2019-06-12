<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengguna */

$this->title = 'Update Pengguna: ' . $model->IDPENGGUNA;
// $this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->IDPENGGUNA, 'url' => ['view', 'id' => $model->IDPENGGUNA]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
