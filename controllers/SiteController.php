<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\UploadForm;
use Yii;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use const YII_ENV_TEST;

class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {

        $popularCategories = (new Query)
                ->select("categories.id as categoryId ,categories.name as categoryName,count(*) as count")
//                ->select("*")
                ->from("ads")
                ->join("join", "sub_categories", "sub_categories.type = ads.ads_type")
                ->join("join", "categories", "sub_categories.category_id = categories.id")
                ->groupBy("categories.id")
                ->orderBy("count DESC")
                ->all();

//        VarDumper::dump($popularCategories, 3, true);
//        die();

        return $this->render('index', ["popularCategories" => $popularCategories]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionCategory() {
        return $this->render('category', [
        ]);
    }

    public function actionAdDetails() {

        $adId = 837;

        $ad = (new Query)
                ->select("ads.id as id,ads.title,ads.description as description,ads.image,ads.price,ads.price_unit,ads.creation_date,places.place_name,ads.phone,clients.name as clientName")
                ->from("ads")
                ->join("join", "places", "places.place_id = ads.place")
                ->join("join", "clients", "ads.user_id = clients.id")
                ->where(["ads.id" => $adId])
                ->one();

        $adImages = (new Query)
                ->select("*")
                ->from("ads_pictures")
                ->where(["ads_id" => $adId])
                ->all();



        return $this->render('adDetails', [
                    'ad' => $ad,
                    'adImages' => $adImages,
                    'imageUrl' => 'http://5.189.150.68//buy_and_sell_in_lebanon/web/imagesads/'
        ]);
    }

}
