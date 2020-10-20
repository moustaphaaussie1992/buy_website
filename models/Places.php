<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "places".
 *
 * @property int $place_id
 * @property string $place_name
 * @property string $place_name_ar
 *
 * @property Ads[] $ads
 */
class Places extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'places';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place_name', 'place_name_ar'], 'required'],
            [['place_name', 'place_name_ar'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'place_id' => Yii::t('app', 'Place ID'),
            'place_name' => Yii::t('app', 'Place Name'),
            'place_name_ar' => Yii::t('app', 'Place Name Ar'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasMany(Ads::className(), ['place' => 'place_id']);
    }
}
