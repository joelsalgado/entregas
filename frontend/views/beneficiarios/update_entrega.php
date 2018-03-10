<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 09/03/2018
 * Time: 07:03 PM
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */

$this->title = 'Actualizar Entrega: ' . $model->FOLIO;
?>
<div class="beneficiarios-update">



    <?= $this->render('_form_entrega', [
        'model' => $model,
    ]) ?>

</div>