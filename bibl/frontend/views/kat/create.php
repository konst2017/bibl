<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kat */

$this->title = 'Добавить категорию';
$this->params['breadcrumbs'][] = ['label' => 'Kats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
