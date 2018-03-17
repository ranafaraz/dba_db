<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "advocates".
 *
 * @property int $adv_id
 * @property string $adv_Name
 * @property string $adv_Father_Name
 * @property string $adv_Address
 * @property string $adv_Phone_No
 * @property string $adv_CNIC
 * @property string $adv_SNo
 * @property string $adv_BRPNo
 * @property string $adv_HCRNo
 * @property string $adv_EDSC
 * @property string $adv_EDHC
 * @property string $adv_EDLC
 * @property string $adv_VMSC
 * @property string $adv_VMHC
 * @property string $adv_VMLC
 * @property string $adv_NICNo
 * @property resource $adv_Photo
 * @property resource $adv_Image_CNIC
 * @property resource $adv_Image_License
 * @property string $adv_Voting_Eligibility
 * @property string $adv_Status
 * @property string $adv_Created_At
 * @property int $adv_Created_By
 * @property string $adv_Updated_At
 * @property int $adv_Updated_By
 */
class Advocates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advocates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No', 'adv_CNIC', 'adv_SNo', 'adv_BRPNo', 'adv_HCRNo', 'adv_EDSC', 'adv_EDHC', 'adv_EDLC', 'adv_VMSC', 'adv_VMHC', 'adv_VMLC', 'adv_NICNo', 'adv_Photo', 'adv_Image_CNIC', 'adv_Image_License', 'adv_Voting_Eligibility', 'adv_Status', 'adv_Created_By', 'adv_Updated_By'], 'required'],
            [['adv_EDSC', 'adv_EDHC', 'adv_EDLC', 'adv_Created_At', 'adv_Updated_At'], 'safe'],
            [['adv_VMSC', 'adv_VMHC', 'adv_VMLC', 'adv_Photo', 'adv_Image_CNIC', 'adv_Image_License', 'adv_Voting_Eligibility', 'adv_Status'], 'string'],
            [['adv_Created_By', 'adv_Updated_By'], 'integer'],
            [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No'], 'string', 'max' => 255],
            [['adv_CNIC', 'adv_NICNo'], 'string', 'max' => 15],
            [['adv_SNo', 'adv_BRPNo', 'adv_HCRNo'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adv_id' => 'ID',
            'adv_Name' => 'Name',
            'adv_Father_Name' => 'Father  Name',
            'adv_Address' => 'Address',
            'adv_Phone_No' => 'Phone  No',
            'adv_CNIC' => 'CNIC',
            'adv_SNo' => 'SNo',
            'adv_BRPNo' => 'BRPNo',
            'adv_HCRNo' => 'HCRNo',
            'adv_EDSC' => 'Enrollment Date - SC',
            'adv_EDHC' => 'Enrollment Date - HC',
            'adv_EDLC' => 'Enrollment Date - LC',
            'adv_VMSC' => 'Voter Member - SC',
            'adv_VMHC' => 'Voter Member - HC',
            'adv_VMLC' => 'Voter Member - LC',
            'adv_NICNo' => 'NICNo',
            'adv_Photo' => 'Passport Size Photo',
            'adv_Image_CNIC' => 'Scanned Copy - CNIC',
            'adv_Image_License' => 'Scanned Copy - Advocacy License',
            'adv_Voting_Eligibility' => 'Voting  Eligibility',
            'adv_Status' => 'Status',
            // 'adv_Created_At' => 'Adv  Created  At',
            // 'adv_Created_By' => 'Adv  Created  By',
            // 'adv_Updated_At' => 'Adv  Updated  At',
            // 'adv_Updated_By' => 'Adv  Updated  By',
        ];
    }

    /**
     * @inheritdoc
     * @return AdvocatesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdvocatesQuery(get_called_class());
    }
}
