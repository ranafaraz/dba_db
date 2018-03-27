<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Advocates */

$this->title = $model->adv_id;
$this->params['breadcrumbs'][] = ['label' => 'Advocates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$photoInfo = $model->PhotoInfo;
$photo = Html::img($photoInfo['url'],['alt'=>$photoInfo['alt']]);
$options = ['data-lightbox'=>'profile image','data-title'=>$photoInfo['alt']];
?>
<div class="advocates-view">

    <h1><?= Html::encode($model->adv_Name) ?>'s Profile</h1>

    <figure>
        <?= Html::a($photo,$photoInfo['url'],$options); ?>
        <!-- <figcaption>(Click to enlarge)</figcaption> -->
    </figure>

    <h2>Advocate Detail's</h2>

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
<<<<<<< HEAD
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


=======
    <button class="btn btn-success">Display CNIC and License</button>
    <br/>
    <div id="figure" style="display:none;margin-top: 10px; ">
        <figure>
            <?= Html::a($cnic,$cnicInfo['url'],$coptions); ?>
        </figure>
        <br>
        <figure>
            <?= Html::a($license,$licenseInfo['url'],$coptions); ?>
        </figure>
    </div>
>>>>>>> cfd73c3351ef23fde0c0c484d9014f812fe6a04d
</div>

<?php
$script = <<< JS
$(document).ready(function(){
    $("button").click(function(){
        $("#figure").toggle();
    });
});
JS;
$this->registerJs($script);
?>
