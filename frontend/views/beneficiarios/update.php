<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */

$this->title = 'Update Beneficiarios: ' . $model->FOLIO;
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FOLIO, 'url' => ['view', 'id' => $model->FOLIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beneficiarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
