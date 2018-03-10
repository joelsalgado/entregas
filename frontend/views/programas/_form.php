<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Programas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prog_id')->textInput() ?>

    <?= $form->field($model, 'prog_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
