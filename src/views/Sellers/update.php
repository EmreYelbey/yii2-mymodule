<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model emreyelbey\content\models\Sellers */

$this->title = 'Update Sellers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sellers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sellers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
