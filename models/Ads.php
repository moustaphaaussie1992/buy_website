<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property int $id
 * @property int $user_id
 * @property string $ads_type
 * @property int $ads_detail_id
 * @property int $place
 * @property string $description
 * @property int $user
 * @property string $phone
 * @property string $image
 * @property string $creation_date
 * @property string $title
 * @property string $price
 * @property string $price_unit
 * @property int $is_approved
 * @property int $is_removed
 *
 * @property Places $place0
 * @property Clients $user0
 * @property AdsComments[] $adsComments
 * @property AdsPictures[] $adsPictures
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'ads_type', 'ads_detail_id', 'place', 'description', 'user', 'phone', 'image', 'title', 'price', 'price_unit'], 'required'],
            [['user_id', 'ads_detail_id', 'place', 'user', 'is_approved', 'is_removed'], 'integer'],
            [['description'], 'string'],
            [['creation_date'], 'safe'],
            [['ads_type'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 23],
            [['image'], 'string', 'max' => 2000],
            [['title', 'price'], 'string', 'max' => 250],
            [['price_unit'], 'string', 'max' => 255],
            [['place'], 'exist', 'skipOnError' => true, 'targetClass' => Places::className(), 'targetAttribute' => ['place' => 'place_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'ads_type' => Yii::t('app', 'Ads Type'),
            'ads_detail_id' => Yii::t('app', 'Ads Detail ID'),
            'place' => Yii::t('app', 'Place'),
            'description' => Yii::t('app', 'Description'),
            'user' => Yii::t('app', 'User'),
            'phone' => Yii::t('app', 'Phone'),
            'image' => Yii::t('app', 'Image'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'title' => Yii::t('app', 'Title'),
            'price' => Yii::t('app', 'Price'),
            'price_unit' => Yii::t('app', 'Price Unit'),
            'is_approved' => Yii::t('app', 'Is Approved'),
            'is_removed' => Yii::t('app', 'Is Removed'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace0()
    {
        return $this->hasOne(Places::className(), ['place_id' => 'place']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Clients::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsComments()
    {
        return $this->hasMany(AdsComments::className(), ['ad_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsPictures()
    {
        return $this->hasMany(AdsPictures::className(), ['ads_id' => 'id']);
    }
}
