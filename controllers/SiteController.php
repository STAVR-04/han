<?php

namespace app\controllers;

use app\models\Aditionaltours;
use app\models\Attractions;
use app\models\Reviews;
use app\models\Reviewstours;
use app\models\Slider;
use app\models\SliderBig;
use app\models\SliderSmall;
use app\models\Tours;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Hotel;

class SiteController extends AppController
{
    public function behaviors()
    {
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
     * @inheritdoc
     */
    public function actions()
    {
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
    public function actionIndex()
    {

        $sb =  SliderBig::find()->all();
        $sb_col = SliderBig::find()->count();
        $ss =  SliderSmall::find()->all();
        $ss_col = SliderSmall::find()->count();
        $hotel = Hotel::find()->limit(4)->all();
        $tours = Tours::find()->limit(4)->all();
        return $this->render('index',compact('sb','sb_col', 'ss', 'ss_col', 'hotel', 'tours'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionHotelprofile(){
        $hotels = Hotel::find()->limit(6)->all();
        $hotel = Hotel::find()->where(['id' => Yii::$app->request->get('id')])->all();

//        echo "<pre>";
//        print_r($hotel);
//        echo "</pre>";
        return $this->render('hotelprofile', compact('hotels', 'hotel'));
    }

    public function actionToursprofile(){
        $tour = Tours::find()->where(['id' => Yii::$app->request->get('id')])->one();
        $tours = Tours::find()->where(['!=','id',Yii::$app->request->get('id')])->all();
        $slider = Slider::find()->where(['id_item' => 'tour'.Yii::$app->request->get('id')])->all();
        $atractions = Attractions::find()->where(['id_item' => Yii::$app->request->get('id')])->all();
        $aditional = Aditionaltours::find()->where(['id_item' => Yii::$app->request->get('id')]);
        $reviews = Reviewstours::find()->where(['id_item' => Yii::$app->request->get('id')]);
        return $this->render('toursprofile', compact('tour','tours', 'slider', 'atractions', 'aditional', 'reviews'));
    }
    public function actionTours(){
        $tours = Tours::find()->all();


        return $this->render('tours', compact('tours', 'slider'));
    }
    public function actionHotels(){
        return $this->render('hotels');
    }
    public function actionNews(){
        return $this->render('news');
    }
    public function actionInteresting(){
        return $this->render('interesting');
    }
    public function actionArticles(){
        return $this->render('articles');
    }
    public function actionArticlesfull(){
        return $this->render('articlesfull');
    }
    public function actionNewsfull(){
        return $this->render('newsfull');
    }
    public function actionContact(){
        return $this->render('contact');
    }
}
