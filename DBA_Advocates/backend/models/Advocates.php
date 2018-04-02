<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

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
 * @property string $adv_Photo
 * @property string $adv_Image_CNIC
 * @property string $adv_Image_License
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
            [['adv_Name', 'adv_Status'], 'required'],

            // [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No', 'adv_CNIC', 'adv_SNo', 'adv_BRPNo', 'adv_HCRNo', 'adv_DOB', 'adv_EDSC', 'adv_EDHC','adv_EDLC', 'adv_VMSC', 'adv_VMHC', 'adv_VMLC', 'adv_NICNo', 'adv_Voting_Eligibility', 'adv_Status'], 'required'],
            [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No', 'adv_CNIC',   'adv_SNo', 'adv_BRPNo', 'adv_HCRNo', 'adv_DOB','adv_EDSC', 'adv_EDHC','adv_EDLC', 'adv_VMSC',   'adv_VMHC', 'adv_VMLC', 'adv_NICNo', 'adv_Voting_Eligibility', 'adv_Status','adv_Created_At', 'adv_Updated_At','adv_Updated_By','adv_Created_By'], 'safe'],
            [['adv_VMSC', 'adv_VMHC', 'adv_VMLC', 'adv_Voting_Eligibility', 'adv_Status'], 'string'],
            [['adv_Created_By', 'adv_Updated_By'], 'integer'],
            [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No'], 'string', 'max' => 255],
            [['adv_CNIC', 'adv_NICNo'], 'string', 'max' => 15],
            [['adv_SNo', 'adv_BRPNo', 'adv_HCRNo'], 'string', 'max' => 12],
            [['adv_Photo', 'adv_Image_CNIC', 'adv_Image_License'], 'string', 'max' => 200],
            [['adv_Image_CNIC','adv_Image_License'],'file','skipOnEmpty'=> true],
            [['adv_Photo'], 'image', 'extensions' => 'jpg',
                 'minWidth' => 100, 'maxWidth' => 200,
                 'minHeight' => 100, 'maxHeight' => 300,],
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
            'adv_Phone_No' => 'Phone No',
            'adv_CNIC' => 'CNIC',
            'adv_SNo' => 'S - No',
            'adv_BRPNo' => 'BRP - No',
            'adv_HCRNo' => 'HCR - No',
            'adv_DOB' => 'DOB',
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

    

    public function getPhotoInfo(){
        $path = Url::to('@webroot/uploads/');
        $url = Url::to('@web/uploads/');
        $filename = strtolower($this->adv_Name).'_photo'.'.jpg';
        $alt = $this->adv_Name."'s Profile Picture";

        $imageInfo = ['alt'=>$alt];

        if(file_exists($path.$filename)){
            $imageInfo['url'] = $url.$filename; 
        }  else {
            $imageInfo['url'] = $url.'default.jpg';
        }
        return $imageInfo;
    }

    public function getCnicInfo(){
        $path = Url::to('@webroot/uploads/');
        $url = Url::to('@web/uploads/');
        $filename = strtolower($this->adv_Name).'_CNIC'.'.jpg';
        $alt = $this->adv_Name."'s CNIC Picture";

        $imageInfo = ['alt'=>$alt];

        if(file_exists($path.$filename)){
            $imageInfo['url'] = $url.$filename; 
        }  else {
            $imageInfo['url'] = $url.'default.jpg';
        }
        return $imageInfo;
    }

    public function getLicenseInfo(){
        $path = Url::to('@webroot/uploads/');
        $url = Url::to('@web/uploads/');
        $filename = strtolower($this->adv_Name).'_license'.'.jpg';
        $alt = $this->adv_Name."'s License Picture";

        $imageInfo = ['alt'=>$alt];

        if(file_exists($path.$filename)){
            $imageInfo['url'] = $url.$filename; 
        }  else {
            $imageInfo['url'] = $url.'default.jpg';
        }
        return $imageInfo;
    }


}
