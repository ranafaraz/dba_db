<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Advocates;

/**
 * AdvocatesSearch represents the model behind the search form of `backend\models\Advocates`.
 */
class AdvocatesSearch extends Advocates
{
    /**
     * @inheritdoc
     */

    public $globalSearch;

    public function rules()
    {
        return [
            [['adv_id', 'adv_Created_By', 'adv_Updated_By'], 'integer'],
            [['adv_Name','globalSearch', 'adv_Father_Name', 'adv_Address','adv_Phone_No', 'adv_CNIC', 'adv_SNo', 'adv_BRPNo', 'adv_HCRNo', 'adv_DOB','adv_EDSC', 'adv_EDHC','adv_EDLC', 'adv_VMSC',   'adv_VMHC', 'adv_VMLC', 'adv_NICNo', 'adv_Voting_Eligibility', 'adv_Status','adv_Created_At', 'adv_Updated_At','adv_Updated_By','adv_Created_By'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Advocates::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions

        $query->orFilterWhere(['like', 'adv_Name', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Father_Name', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Address', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Phone_No', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_CNIC', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_SNo', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_BRPNo', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_HCRNo', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_VMSC', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_VMHC', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_VMLC', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_NICNo', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Photo', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Image_CNIC', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Image_License', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Voting_Eligibility', $this->globalSearch])
            ->orFilterWhere(['like', 'adv_Status', $this->globalSearch]);

        return $dataProvider;
    }
}
