<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model emreyelbey\content\models\Stocklists */

$this->title = 'Create Stocklists';
$this->params['breadcrumbs'][] = ['label' => 'Stocklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocklists-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
