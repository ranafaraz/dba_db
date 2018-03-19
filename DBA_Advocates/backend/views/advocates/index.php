<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdvocatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advocates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advocates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advocates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'adv_id',
            'adv_Name',
            'adv_Father_Name',
            'adv_CNIC',
            'adv_Phone_No',
            //'adv_Address',
            //'adv_SNo',
            //'adv_BRPNo',
            //'adv_HCRNo',
            //'adv_EDSC',
            //'adv_EDHC',
            //'adv_EDLC',
            //'adv_VMSC',
            //'adv_VMHC',
            //'adv_VMLC',
            //'adv_NICNo',
            //'adv_Photo',
            //'adv_Image_CNIC',
            //'adv_Image_License',
            'adv_Voting_Eligibility',
            //'adv_Status',
            //'adv_Created_At',
            //'adv_Created_By',
            //'adv_Updated_At',
            //'adv_Updated_By',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
