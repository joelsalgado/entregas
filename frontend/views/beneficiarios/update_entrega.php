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

$this->title = 'Canasta Entrgada';
?>
<div class="beneficiarios-entregados">

    <div class="alert alert-danger">
        <strong>Canasta entregada!</strong> Esta Canasta ya se entrego al beneficiario!
    </div

    <p><?= Html::a('Regresar', ['index'], ['class' => 'btn btn-success btn-lg']) ?></p>

</div>