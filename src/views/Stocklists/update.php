<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model emreyelbey\content\models\Stocklists */

$this->title = 'Update Stocklists: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stocklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stocklists-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
