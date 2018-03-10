<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 09/03/2018
 * Time: 06:17 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;


/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrega-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_canasta')->widget(CheckboxX::classname(), [
        'name'=>'s_1',
        'options'=>['id'=>'s_1'],
        'pluginOptions'=>['threeState'=>false]
    ]); ?>

    <?php if(Yii::$app->user->identity->prog_id == 0): ?>

    <?= $form->field($model, 'status_comprobante')->widget(CheckboxX::classname(), [
        'name'=>'s_1',
        'options'=>['id'=>'comprobante'],
        'pluginOptions'=>['threeState'=>false]
    ]); ?>

    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Entregar', ['class' => 'btn btn-success', 'data' => [
            'confirm' => 'Deseas Realizar la entrega',
            'method' => 'post'
        ]]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>