<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ssilki */

$this->title = 'Create Ssilki';
$this->params['breadcrumbs'][] = ['label' => 'Ssilkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssilki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
