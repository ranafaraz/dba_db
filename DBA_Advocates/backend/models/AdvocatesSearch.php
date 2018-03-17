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
    public function rules()
    {
        return [
            [['adv_id', 'adv_Created_By', 'adv_Updated_By'], 'integer'],
            [['adv_Name', 'adv_Father_Name', 'adv_Address', 'adv_Phone_No', 'adv_CNIC', 'adv_SNo', 'adv_BRPNo', 'adv_HCRNo', 'adv_EDSC', 'adv_EDHC', 'adv_EDLC', 'adv_VMSC', 'adv_VMHC', 'adv_VMLC', 'adv_NICNo', 'adv_Photo', 'adv_Image_CNIC', 'adv_Image_License', 'adv_Voting_Eligibility', 'adv_Status', 'adv_Created_At', 'adv_Updated_At'], 'safe'],
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
        $query->andFilterWhere([
            'adv_id' => $this->adv_id,
            'adv_EDSC' => $this->adv_EDSC,
            'adv_EDHC' => $this->adv_EDHC,
            'adv_EDLC' => $this->adv_EDLC,
            'adv_Created_At' => $this->adv_Created_At,
            'adv_Created_By' => $this->adv_Created_By,
            'adv_Updated_At' => $this->adv_Updated_At,
            'adv_Updated_By' => $this->adv_Updated_By,
        ]);

        $query->andFilterWhere(['like', 'adv_Name', $this->adv_Name])
            ->andFilterWhere(['like', 'adv_Father_Name', $this->adv_Father_Name])
            ->andFilterWhere(['like', 'adv_Address', $this->adv_Address])
            ->andFilterWhere(['like', 'adv_Phone_No', $this->adv_Phone_No])
            ->andFilterWhere(['like', 'adv_CNIC', $this->adv_CNIC])
            ->andFilterWhere(['like', 'adv_SNo', $this->adv_SNo])
            ->andFilterWhere(['like', 'adv_BRPNo', $this->adv_BRPNo])
            ->andFilterWhere(['like', 'adv_HCRNo', $this->adv_HCRNo])
            ->andFilterWhere(['like', 'adv_VMSC', $this->adv_VMSC])
            ->andFilterWhere(['like', 'adv_VMHC', $this->adv_VMHC])
            ->andFilterWhere(['like', 'adv_VMLC', $this->adv_VMLC])
            ->andFilterWhere(['like', 'adv_NICNo', $this->adv_NICNo])
            ->andFilterWhere(['like', 'adv_Photo', $this->adv_Photo])
            ->andFilterWhere(['like', 'adv_Image_CNIC', $this->adv_Image_CNIC])
            ->andFilterWhere(['like', 'adv_Image_License', $this->adv_Image_License])
            ->andFilterWhere(['like', 'adv_Voting_Eligibility', $this->adv_Voting_Eligibility])
            ->andFilterWhere(['like', 'adv_Status', $this->adv_Status]);

        return $dataProvider;
    }
}
