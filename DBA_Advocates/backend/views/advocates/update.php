<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Advocates */

$this->title = 'Update Advocates: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Advocates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adv_id, 'url' => ['view', 'id' => $model->adv_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="advocates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
