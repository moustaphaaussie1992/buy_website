<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads_cars".
 *
 * @property int $id
 * @property int $car
 * @property int $car_sub
 * @property int $distance_covered
 * @property string $transmission_type
 * @property int $year
 * @property string $is_sale
 *
 * @property Cars $car0
 * @property CarsSub $carSub
 */
class AdsCars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ads_cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car', 'car_sub', 'distance_covered', 'transmission_type', 'year', 'is_sale'], 'required'],
            [['car', 'car_sub', 'distance_covered', 'year'], 'integer'],
            [['transmission_type', 'is_sale'], 'string', 'max' => 200],
            [['car'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car' => 'car_id']],
            [['car_sub'], 'exist', 'skipOnError' => true, 'targetClass' => CarsSub::className(), 'targetAttribute' => ['car_sub' => 'model_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'car' => Yii::t('app', 'Car'),
            'car_sub' => Yii::t('app', 'Car Sub'),
            'distance_covered' => Yii::t('app', 'Distance Covered'),
            'transmission_type' => Yii::t('app', 'Transmission Type'),
            'year' => Yii::t('app', 'Year'),
            'is_sale' => Yii::t('app', 'Is Sale'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar0()
    {
        return $this->hasOne(Cars::className(), ['car_id' => 'car']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarSub()
    {
        return $this->hasOne(CarsSub::className(), ['model_id' => 'car_sub']);
    }
}
