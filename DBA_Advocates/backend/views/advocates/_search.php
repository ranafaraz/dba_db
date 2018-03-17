<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdvocatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advocates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'adv_id') ?>

    <?= $form->field($model, 'adv_Name') ?>

    <?= $form->field($model, 'adv_Father_Name') ?>

    <?= $form->field($model, 'adv_Address') ?>

    <?= $form->field($model, 'adv_Phone_No') ?>

    <?php // echo $form->field($model, 'adv_CNIC') ?>

    <?php // echo $form->field($model, 'adv_SNo') ?>

    <?php // echo $form->field($model, 'adv_BRPNo') ?>

    <?php // echo $form->field($model, 'adv_HCRNo') ?>

    <?php // echo $form->field($model, 'adv_EDSC') ?>

    <?php // echo $form->field($model, 'adv_EDHC') ?>

    <?php // echo $form->field($model, 'adv_EDLC') ?>

    <?php // echo $form->field($model, 'adv_VMSC') ?>

    <?php // echo $form->field($model, 'adv_VMHC') ?>

    <?php // echo $form->field($model, 'adv_VMLC') ?>

    <?php // echo $form->field($model, 'adv_NICNo') ?>

    <?php // echo $form->field($model, 'adv_Photo') ?>

    <?php // echo $form->field($model, 'adv_Image_CNIC') ?>

    <?php // echo $form->field($model, 'adv_Image_License') ?>

    <?php // echo $form->field($model, 'adv_Voting_Eligibility') ?>

    <?php // echo $form->field($model, 'adv_Status') ?>

    <?php // echo $form->field($model, 'adv_Created_At') ?>

    <?php // echo $form->field($model, 'adv_Created_By') ?>

    <?php // echo $form->field($model, 'adv_Updated_At') ?>

    <?php // echo $form->field($model, 'adv_Updated_By') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
