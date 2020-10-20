<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $car_id
 * @property string $car_name
 * @property string $car_name_ar
 *
 * @property AdsCars[] $adsCars
 * @property CarsSub[] $carsSubs
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_name', 'car_name_ar'], 'required'],
            [['car_name', 'car_name_ar'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'car_id' => Yii::t('app', 'Car ID'),
            'car_name' => Yii::t('app', 'Car Name'),
            'car_name_ar' => Yii::t('app', 'Car Name Ar'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsCars()
    {
        return $this->hasMany(AdsCars::className(), ['car' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarsSubs()
    {
        return $this->hasMany(CarsSub::className(), ['car_id' => 'car_id']);
    }
}
