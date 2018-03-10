<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="beneficiarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CVE_PROGRAMA')->textInput() ?>

    <?= $form->field($model, 'N_PERIODO')->textInput() ?>

    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_REGION')->textInput() ?>

    <?= $form->field($model, 'REGIONDESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_MUNICIPIO')->textInput() ?>

    <?= $form->field($model, 'MUNICIPIONOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TARJETA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_TARJETA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
