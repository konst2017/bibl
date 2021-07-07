<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ssilkiid */

$this->title = 'Update Ssilkiid: ' . $model->num;
$this->params['breadcrumbs'][] = ['label' => 'Ssilkiids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->num, 'url' => ['view', 'id' => $model->num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ssilkiid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
