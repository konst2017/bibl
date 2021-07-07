<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mater */

$this->title = 'Материалы';
$this->params['breadcrumbs'][] = ['label' => 'Maters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mater-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
