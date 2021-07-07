<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ssilkiids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssilkiid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ssilkiid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'num',
                'naim',
                'id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]
    ); ?>


</div>
