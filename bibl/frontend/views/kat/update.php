<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kat */

$this->title = 'Update Kat: ' . $model->num;
$this->params['breadcrumbs'][] = ['label' => 'Kats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->num, 'url' => ['view', 'id' => $model->num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
