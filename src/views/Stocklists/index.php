<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel emreyelbey\content\models\StocklistsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocklists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocklists-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stocklists', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Return Main Page', ['home/index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sellername',
            'productsname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
