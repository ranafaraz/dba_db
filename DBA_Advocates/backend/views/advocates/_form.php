<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Advocates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advocates-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Father_Name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Address')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Phone_No')->widget(yii\widgets\MaskedInput::class, [
                'mask' => '+99-999-9999999',
                ]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_CNIC')->widget(yii\widgets\MaskedInput::class, [
                'mask' => '99999-9999999-9',
                ]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_SNo')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_BRPNo')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_HCRNo')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_DOB')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d'
                    ]
                ]);?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
               <?= $form->field($model, 'adv_EDSC')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d'
                    ]
                ]);?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_EDHC')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d'
                    ]
                ]);?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_EDLC')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d'
                    ]
                ]);?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_VMSC')->dropDownList([ 'No' => 'No', 'Yes' => 'Yes', ], ['prompt' => 'Status']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_VMHC')->dropDownList([ 'No' => 'No', 'Yes' => 'Yes', ], ['prompt' => 'Status']) ?>
            </div>
            <div class="col-md-4">
                 <?= $form->field($model, 'adv_VMLC')->dropDownList([ 'No' => 'No', 'RYK' => 'RYK', ], ['prompt' => 'Status']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Photo')->fileInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Image_CNIC')->fileInput() ?>
            </div>
             <div class="col-md-4">
                <?= $form->field($model, 'adv_Image_License')->fileInput() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'adv_NICNo')->textInput(['maxlength' => true]) ?>
            </div> 
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Voting_Eligibility')->dropDownList([ 'No' => 'No', 'Yes' => 'Yes', ], ['prompt' => 'Status']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adv_Status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>            
            </div>
        </div>
        <div class="row invisible">
            <div class="col-md-3 ">
                <?= $form->field($model, 'adv_Created_At')->textInput() ?>            
            </div> 
            <div class="col-md-3">
                <?= $form->field($model, 'adv_Created_By')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'adv_Updated_At')->textInput() ?>            
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'adv_Updated_At')->textInput() ?>   
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12 text-center">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg']) ?>        
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
