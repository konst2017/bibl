<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kat-form">

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary mb-4']) ?>
    </div>

    <?php
    ActiveForm::end(); ?>

</div>
