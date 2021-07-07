<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mater */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mater-form">

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'awtor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tip')
        ->widget(
            kartik\select2\Select2::className(),
            ['data' => \yii\helpers\ArrayHelper::map(\frontend\models\Tip::find()->All(), 'naim', 'naim')]
        )
    ?>
    <?= $form->field($model, 'kat')
        ->widget(
            kartik\select2\Select2::className(),
            ['data' => \yii\helpers\ArrayHelper::map(\frontend\models\Kat::find()->All(), 'naim', 'naim')]
        )
    ?>
    <?php
    echo $form->field($model, 'content')->widget(
        CKEditor::className(),
        [
            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
        ]
    );
    ?>
    <?= $form->field($model, 'teg')
        ->widget(
            kartik\select2\Select2::className(),
            ['data' => \yii\helpers\ArrayHelper::map(frontend\models\Teg::find()->All(), 'naim', 'naim')]
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary mb-4']) ?>
    </div>

    <?php
    ActiveForm::end(); ?>

</div>
