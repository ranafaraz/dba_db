<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Advocates */

$this->title = 'Create Advocates';
$this->params['breadcrumbs'][] = ['label' => 'Advocates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advocates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
