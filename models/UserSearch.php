<?php

namespace app\models;

use app\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User {

    public $role;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email'], 'safe'],
            [['role'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        if (\Yii::$app->user->id == 1) {
            $query = User::find()
                    ->select('user.*,auth_item.name as role')
                    ->leftJoin('auth_assignment', 'auth_assignment.user_id=user.id')
                    ->leftJoin('auth_item', 'auth_item.name = auth_assignment.item_name')
                    ->where(['auth_item.type' => 1]);
        } else {
            $query = User::find()
                    ->select('user.*,auth_item.name as role')
                    ->leftJoin('auth_assignment', 'auth_assignment.user_id=user.id')
                    ->leftJoin('auth_item', 'auth_item.name = auth_assignment.item_name')
                    ->where(['auth_item.type' => 1])
                    ->andWhere(['!=', 'user.id', 1])
            ; // do not show admin
        }


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'auth_key', $this->auth_key])
                ->andFilterWhere(['like', 'password_hash', $this->password_hash])
                ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['=', 'auth_assignment.item_name', $this->role]);

        return $dataProvider;
    }

}
