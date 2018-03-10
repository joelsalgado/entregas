<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */

$this->title = $model->FOLIO;
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficiarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FOLIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FOLIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FOLIO',
            'CVE_PROGRAMA',
            'N_PERIODO',
            'NOMBRES',
            'SEGUNDO_APELLIDO',
            'PRIMER_APELLIDO',
            'CVE_REGION',
            'REGIONDESCRIPCION',
            'CVE_MUNICIPIO',
            'MUNICIPIONOMBRE',
            'TARJETA',
            'ID_TARJETA',
        ],
    ]) ?>

</div>
