<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true, 'value' => '']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php if(!$model->isNewRecord):?>
        <?= $form->field($model, 'status')->radioList(Yii::$app->params['estatus']);?>
    <?php endif;?>
    <?php if(Yii::$app->user->identity->role ==30):?>
        <?= $form->field($model, 'role')->radioList(Yii::$app->params['rolesAdmin']);?>
    <?php endif;?>

    <?= $form->field($model, 'prog_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\Programas::getProgramasOk(),
            'prog_id', 'prog_desc'),
        'options' => ['placeholder' => 'Selecciona un Programa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
