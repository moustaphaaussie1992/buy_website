<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property int $id
 * @property int $client_id
 * @property int $from_client
 * @property string $type
 * @property int $ad_id
 * @property int $is_viewed
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'from_client', 'type', 'ad_id'], 'required'],
            [['client_id', 'from_client', 'ad_id', 'is_viewed'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'client_id' => Yii::t('app', 'Client ID'),
            'from_client' => Yii::t('app', 'From Client'),
            'type' => Yii::t('app', 'Type'),
            'ad_id' => Yii::t('app', 'Ad ID'),
            'is_viewed' => Yii::t('app', 'Is Viewed'),
        ];
    }
}
