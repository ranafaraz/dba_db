<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Advocates]].
 *
 * @see Advocates
 */
class AdvocatesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Advocates[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Advocates|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
