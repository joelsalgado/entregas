<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 09/03/2018
 * Time: 06:15 PM
 */

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */

$this->title = 'Crear Entrega';
?>
<div class="beneficiarios-create">

    <?= $this->render('_form_entrega', [
        'model' => $model,
    ]) ?>

</div>