<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model emreyelbey\content\models\Sellers */

$this->title = 'Create Sellers';
$this->params['breadcrumbs'][] = ['label' => 'Sellers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sellers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
