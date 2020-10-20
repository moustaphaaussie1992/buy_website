<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars_sub".
 *
 * @property int $model_id
 * @property string $model_name
 * @property string $model_name_ar
 * @property int $car_id
 *
 * @property AdsCars[] $adsCars
 * @property Cars $car
 */
class CarsSub extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars_sub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_name', 'model_name_ar', 'car_id'], 'required'],
            [['car_id'], 'integer'],
            [['model_name', 'model_name_ar'], 'string', 'max' => 200],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car_id' => 'car_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'model_id' => Yii::t('app', 'Model ID'),
            'model_name' => Yii::t('app', 'Model Name'),
            'model_name_ar' => Yii::t('app', 'Model Name Ar'),
            'car_id' => Yii::t('app', 'Car ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsCars()
    {
        return $this->hasMany(AdsCars::className(), ['car_sub' => 'model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Cars::className(), ['car_id' => 'car_id']);
    }
}
