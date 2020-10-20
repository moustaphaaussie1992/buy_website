<?php

namespace app\models;

use DateTime;
use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;

class User extends mdm\admin\models\User {

    const ROLE_ADMIN = 'Administrator';

    public $role;
    public $password;

    public function behaviors() {
        return ArrayHelper::merge(
                        parent::behaviors(), [
                        # custom behaviors
                        ]
        );
    }

    public function rules() {

        return ArrayHelper::merge(parent::rules(), [
                        ['username', 'filter', 'filter' => 'trim'],
                        ['username', 'required'],
                        ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
                        ['username', 'string', 'min' => 2, 'max' => 255],
                        ['password', 'required', 'on' => 'create'],
                        ['password', 'string', 'min' => 6],
                        [['role'], 'safe'],
        ]);
    }

    public static function getRoles() {
        return [
            self::ROLE_ADMIN => self::ROLE_ADMIN
        ];
    }

    public function attributeLabels() {
        return ArrayHelper::merge(parent::attributeLabels(), [
                    'role' => Yii::t('user', 'Role'),
                    'password' => Yii::t('user', 'Password'),
                    'actions' => Yii::t('user', 'Actions'),
        ]);
    }

    public function signup() {
        if ($this->validate()) {
            $this->setPassword($this->password);
            $this->generateAuthKey();
            if ($this->save()) {
                return $this;
            }
        }
        return null;
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return self::findOne(['auth_key' => $token]);
    }

    public static function getUser($id) {
        $model = User::find()
                        ->select('user.*,auth_item.name as role')
                        ->leftJoin('auth_assignment', 'auth_assignment.user_id=user.id')
                        ->leftJoin('auth_item', 'auth_item.name = auth_assignment.item_name')
                        ->where(['user.id' => $id])->all();
        return $model[0];
    }

}
