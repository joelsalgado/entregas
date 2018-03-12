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
    <center>
    <?= $form->field($model, 'status_canasta')->widget(CheckboxX::classname(), [
        'name'=>'s_1',
        'options'=>['id'=>'s_1'],
        'pluginOptions'=>[
                'threeState'=>false,
                'size'=>'xl'
            ]
    ])->label('<p style= "font-size:20px"> Canasta Alimentaria </p>'); ?>

    <?php if(Yii::$app->user->identity->prog_id == 300): ?>

    <?= $form->field($model, 'status_comprobante')->widget(CheckboxX::classname(), [
        'name'=>'s_1',
        'options'=>['id'=>'comprobante'],
        'pluginOptions'=>[
                'threeState'=>false,
                'size'=>'xl'
        ]
    ])->label('<p style= "font-size:20px"> Componente </p>'); ?>

    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Entregar', ['class' => 'btn btn-lg btn-success', 'data' => [
            'confirm' => 'Deseas Realizar la entrega',
            'method' => 'post'
        ]]) ?>
    </div>
    </center>

    <?php ActiveForm::end(); ?>

</div>