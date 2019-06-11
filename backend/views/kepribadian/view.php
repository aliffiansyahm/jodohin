<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kepribadian */

$this->title = $model->IDKEPRIBADIAN;
$this->params['breadcrumbs'][] = ['label' => 'Kepribadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kepribadian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('All', 'index', ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDKEPRIBADIAN], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDKEPRIBADIAN], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDKEPRIBADIAN',
            'NAMAKEPRIBADIAN',
            'DESKRIPSIKEPRIBADIAN',
        ],
    ]) ?> -->
    <br>
    IDKEPRIBADIAN :
    <?php echo $model["IDKEPRIBADIAN"]; ?><br><br>
    NAMAKEPRIBADIAN :
    <?php echo $model["NAMAKEPRIBADIAN"]; ?><br><br>
    DESKRIPSIKEPRIBADIAN :<br>
    <?php echo $model["DESKRIPSIKEPRIBADIAN"]; ?>

</div>
