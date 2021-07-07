<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teg-form">

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary mb-4']) ?>
    </div>

    <?php
    ActiveForm::end(); ?>

</div>
