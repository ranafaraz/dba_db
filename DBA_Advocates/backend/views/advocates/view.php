<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Advocates */

$this->title = $model->adv_id;
$this->params['breadcrumbs'][] = ['label' => 'Advocates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advocates-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adv_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adv_id], [
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
            'adv_id',
            'adv_Name',
            'adv_Father_Name',
            'adv_Address',
            'adv_Phone_No',
            'adv_CNIC',
            'adv_SNo',
            'adv_BRPNo',
            'adv_HCRNo',
            'adv_EDSC',
            'adv_EDHC',
            'adv_EDLC',
            'adv_VMSC',
            'adv_VMHC',
            'adv_VMLC',
            'adv_NICNo',
            'adv_Photo',
            'adv_Image_CNIC',
            'adv_Image_License',
            'adv_Voting_Eligibility',
            'adv_Status',
            'adv_Created_At',
            'adv_Created_By',
            'adv_Updated_At',
            'adv_Updated_By',
        ],
    ]) ?>

</div>
