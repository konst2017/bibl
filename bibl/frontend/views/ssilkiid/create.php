<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ssilkiid */

$this->title = 'Create Ssilkiid';
$this->params['breadcrumbs'][] = ['label' => 'Ssilkiids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssilkiid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
