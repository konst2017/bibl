<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mater */

$this->title = $model->num;
$this->params['breadcrumbs'][] = ['label' => 'Maters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
    <div class="mater-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->num], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(
                'Delete',
                ['delete', 'id' => $model->num],
                [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]
            ) ?>
        </p>

        <?= DetailView::widget(
            [
                'model' => $model,
                'attributes' => [
                    'num',
                    'naim',
                    'awtor',
                    'tip',
                    'kat',
                    'content',
                ],
            ]
        ) ?>
        <?php
        $form = ActiveForm::begin(); ?>
        <?= $form->field($model2, 'naim')
            ->widget(
                kartik\select2\Select2::className(),
                [

                    'data' => \yii\helpers\ArrayHelper::map(frontend\models\Teg::find()->All(), 'naim', 'naim'),
                    'options' => ['placeholder' => ''],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]
            )


        ?>



        <?= $form->field($model2, 'id')->hiddenInput(['maxlength' => true, 'value' => $model->num])->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Добавить тег', ['class' => 'btn btn-success']) ?>
        </div>


        <?= GridView::widget(
            [
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],


                    'naim',


                    ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
                ],
            ]
        ); ?>


        <?= $form->field($model3, 'id')->textInput(['maxlength' => true, 'value' => $model->num])->label(false) ?>
        <?= $form->field($model3, 'naim')->textInput(['maxlength' => true]) ?>
        <?= Html::a('Добавить ссылку', ['dob', 'id' => $model2->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::submitButton('Ввод ссылки', ['class' => 'btn btn-success']) ?>
        <?= GridView::widget(
            [
                'dataProvider' => $dataProvider2,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],


                    'naim',


                    ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
                ],
            ]
        ); ?>


    </div>
<?php
ActiveForm::end(); ?>