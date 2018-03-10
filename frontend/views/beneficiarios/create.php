<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Beneficiarios */

$this->title = 'Create Beneficiarios';
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficiarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
