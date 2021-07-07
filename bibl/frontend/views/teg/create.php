<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teg */

$this->title = 'Добавить тег';
$this->params['breadcrumbs'][] = ['label' => 'Tegs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
