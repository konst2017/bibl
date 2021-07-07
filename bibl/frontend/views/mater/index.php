<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Материалы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mater-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-primary mb-4']) ?>
    </p>
    <div class="col-md-8">
        <form class="header-search__form" id="contact-form" method="get"
              action="<?= \yii\helpers\Url::to(['mater/index']) ?>">
            <div class="input-group mb-3">
                <input class="" type="text" class="form-control" name="mater"
                       aria-label="Example text with button addon" aria-describedby="button-addon1"
                       value='<?= Html::encode($mater) ?>'>

                <button type="submit" class="btn btn-primary mb-4">Искать
                </button>
        </form>
    </div>
</div>
<?= GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'num',
            'naim',
            'awtor',
            'tip',
            'kat',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]
); ?>


</div>
