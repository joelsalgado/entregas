<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BeneficiariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="beneficiarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'FOLIO') ?>

    <?= $form->field($model, 'CVE_PROGRAMA') ?>

    <?= $form->field($model, 'N_PERIODO') ?>

    <?= $form->field($model, 'NOMBRES') ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO') ?>

    <?php // echo $form->field($model, 'CVE_REGION') ?>

    <?php // echo $form->field($model, 'REGIONDESCRIPCION') ?>

    <?php // echo $form->field($model, 'CVE_MUNICIPIO') ?>

    <?php // echo $form->field($model, 'MUNICIPIONOMBRE') ?>

    <?php // echo $form->field($model, 'TARJETA') ?>

    <?php // echo $form->field($model, 'ID_TARJETA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
