<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 20.12.2017
 * Time: 11:40
 */

namespace app\controllers;


use app\models\AdditionalFeatures;
use app\models\Aditionaltours;
use app\models\Attractions;
use app\models\Hotel;
use app\models\HotelAndAdditionalFeatures;
use app\models\HotelAndReviews;
use app\models\LoginForm;
use app\models\Reviews;
use app\models\Reviewstours;
use app\models\Slider;
use app\models\SliderBig;
use app\models\SliderSmall;
use app\models\Tours;
use app\models\Typetour;
use app\models\UploadImage;
use app\models\UploadSlider;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use Yii;
use yii\web\Response;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

class AdminController extends Controller
{
    public $layout;
    public function init()
    {
        parent::init();
        $this->layout = 'admin';

    }

    public function actionHome(){
        return $this->render('home');
    }

    public function actionIndex()
    {
        if( Yii::$app->user->id!=1){
            return  Yii::$app->response->redirect(['admin/login']);
        }
        return $this->render('index');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }
        return $this->render('/admin/login', [
            'model' => $model,
        ]);
    }

    public function actionSliderbig(){
        $model = SliderBig::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => SliderBig::find(),
        ]);
        if(Yii::$app->request->isPost){
            return $this->render('sliderbig',compact('model', 'dataProvider'));
        }
        return $this->render('sliderbig',compact('model', 'dataProvider'));

    }

    public function actionSlidersmall(){
        $model = SliderSmall::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => SliderSmall::find(),
        ]);
        if(Yii::$app->request->isPost){
            return $this->render('slidersmall',compact('model', 'dataProvider'));
        }
        return $this->render('slidersmall',compact('model', 'dataProvider'));

    }


    public function actionSliderbigupdate(){

        $model = SliderBig::find()
            ->where(['id' => Yii::$app->request->get('id')]) // Specify multiple conditions
            ->one();
        $img = new UploadImage();


        if($model->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post())){

            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }


            $model->save();
            $model = SliderBig::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => SliderBig::find(),
            ]);
            return $this->render('sliderbig',compact('model', 'dataProvider'));
        }

        return $this->render('sliderbigupdate',['model'=>$model, 'img'=>$img]);
    }

    public function actionSliderbigdelete(){
        $slider = SliderBig::deleteAll(['id'=>Yii::$app->request->get('id')]);
        if($slider==true) {
            return $this->render('sliderbigdelete');
        }else{
            return $this->render('sliderbig');
        }
    }

    public function actionSliderbigadd(){
        $slider = new SliderBig();
        $img = new UploadImage();
        if($slider->load(Yii::$app->request->post()) && $slider->validate() && $img->load(Yii::$app->request->post())){
            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $slider->img = '/web/uploads/' . $img->img->name;
            }
            $slider->save();
            $model = SliderBig::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => SliderBig::find(),
            ]);
            return $this->render('sliderbig', compact('model', 'dataProvider'));
        }else{
            return $this->render('sliderbigadd', compact('slider','img'));
        }

        return $this->render('sliderbigadd', compact('slider','img'));
    }

    public function actionSlidersmallupdate(){

        $model = SliderSmall::find()
            ->where(['id' => Yii::$app->request->get('id')]) // Specify multiple conditions
            ->one();
        $img = new UploadImage();


        if($model->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post())){

            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }


            $model->save();
            $model = SliderSmall::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => SliderSmall::find(),
            ]);
            return $this->render('slidersmall',compact('model', 'dataProvider'));
        }

        return $this->render('slidersmallupdate',['model'=>$model, 'img'=>$img]);
    }

    public function actionSlidersmalldelete(){
        $slider = SliderSmall::deleteAll(['id'=>Yii::$app->request->get('id')]);
        if($slider==true) {
            return $this->render('slidersmalldelete');
        }else{
            return $this->render('slidersmall');
        }
    }

    public function actionSlidersmalladd(){
        $slider = new SliderSmall();
        $img = new UploadImage();
        if($slider->load(Yii::$app->request->post()) && $slider->validate() && $img->load(Yii::$app->request->post())){
            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $slider->img = '/web/uploads/' . $img->img->name;
            }
            $slider->save();
            $model = SliderSmall::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => SliderSmall::find(),
            ]);
            return $this->render('slidersmall', compact('model', 'dataProvider'));
        }else{
            return $this->render('slidersmalladd', compact('slider','img'));
        }

    }

    public function actionHotel(){
        $model = Hotel::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Hotel::find(),
        ]);
        if(Yii::$app->request->isPost){
            return $this->render('hotel',compact('model', 'dataProvider'));
        }
        return $this->render('hotel',compact('model', 'dataProvider'));
    }

    public function actionHotelupdate(){

        $model = Hotel::find()
            ->where(['id' => Yii::$app->request->get('id')]) // Specify multiple conditions
            ->one();
        $img = new UploadImage();
        $img2 = new UploadSlider();
        $post = Yii::$app->request->post();
        $attractionsadd = new Attractions();
        if($attractionsadd->load(Yii::$app->request->post())){
            foreach ($post['Attractions']['name'] as $item) {
                $attractionsadd2 = new Attractions();
                $attractionsadd2->name = $item;
                $attractionsadd2->id_item = Yii::$app->request->get('id');
                $attractionsadd2->save();
            }

        }
        $attractions = Attractions::find()->where(['id_item' => Yii::$app->request->get('id')])->all();


        $slider = Slider::find()->where(['id_item' => Yii::$app->request->get('id')])->all();
        //$review = HotelAndReviews::find()->leftJoin('Reviews', 'Reviews.id = hotelAndReviews.id_review')->where(['hotelAndReviews.id_hotel' => Yii::$app->request->get('id')])->all();
        $review = HotelAndReviews::find()->joinWith('reviews')->where(['hotelAndReviews.id_hotel' => Yii::$app->request->get('id')])->all();
        $aditional = HotelAndAdditionalFeatures::find()->joinWith('additionalFeatures')->where(['hotelAndAdditionalFeatures.id_hotel' => Yii::$app->request->get('id')])->all();
        $id=[];
        foreach ($aditional as $item){
            $id[]=$item['id_additionalFaetures'];
        }
        $aditionaladd = AdditionalFeatures::find()->where(['not in', 'id', $id])->all();
        echo "<pre>";
        print_r(Yii::$app->request->post());
        echo "</pre>";

        if($model->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post()) && $img2->load(Yii::$app->request->post())){

            $img->img = UploadedFile::getInstance($img,'img');
            $img2->img = UploadedFile::getInstances($img2,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }
            $img2->upload();
            $model->save();
            foreach ($img2->img as $item) {
                $sl = new Slider();
                $sl->url ='/web/uploads/'. $item->name;
                $sl->id_item = Yii::$app->request->get('id');
                $sl->save();
            }
            $model = Hotel::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => Hotel::find(),
            ]);
            return $this->render('hotel',compact('model', 'dataProvider'));
        }

        return $this->render('hotelupdate',compact('model', 'img', 'review', 'aditional', 'aditionaladd', 'slider', 'img2', 'attractions', 'attractionsadd'));
    }

    public function actionHoteladd(){
        $slider = new Hotel();
        $img = new UploadImage();
        $img2 = new UploadSlider();

        $post = Yii::$app->request->post();
        if($slider->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post()) && $img2->load(Yii::$app->request->post())){
            $img->img = UploadedFile::getInstance($img,'img');
            $img2->img = UploadedFile::getInstances($img2,'img');
            if($img->img!==null) {
                $img->upload();
                $slider->img = '/web/uploads/' . $img->img->name;
            }
            $img2->upload();
            $slider->save();
            foreach ($img2->img as $item) {
                $sl = new Slider();
                $sl->url ='/web/uploads/'. $item->name;
                $hotel = Hotel::find()->where(['name'=> $post['hotel']['name']])->one();
                $sl->id_item = $hotel->id;
                $sl->save();
            }

            $model = Hotel::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => Hotel::find(),
            ]);
            return $this->render('hotel', compact('model', 'dataProvider'));
        }else{
            return $this->render('hoteladd', compact('slider','img', 'img2'));
        }

    }
    public function actionHoteldelete(){
        $slider = Hotel::deleteAll(['id'=>Yii::$app->request->get('id')]);
        if($slider==true) {
            return $this->render('hoteldelete');
        }else{
            return $this->render('hotel');
        }
    }
    public function actionAjaxreview(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $har = HotelAndReviews::find()->where(['id' => substr($post['id'],3)])->one();
            if($har->status == 'Не подтверждено!') {
                $har->status = 'Подтверждено!';
            }else{
                $har->status = 'Не подтверждено!';
            }
            $send=$har->status;
            $har->save();
            return $send;
        }
    }
    public function actionAjaxreviewtour(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $har = Reviewstours::find()->where(['id' => substr($post['id'],3)])->one();
            if($har->status == 'Не подтверждено!') {
                $har->status = 'Подтверждено!';
            }else{
                $har->status = 'Не подтверждено!';
            }
            $send=$har->status;
            $har->save();
            return $send;
        }
    }
    public function actionAjaxadditional(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $har = HotelAndAdditionalFeatures::find()->where(['id_hotel' => substr($post['id_additional'],4)])->andWhere(['id_additionalFaetures' => substr($post['id'],3)])->one();
            if($har) {
                $del = HotelAndAdditionalFeatures::deleteAll(['id_hotel' => substr($post['id_additional'],4), 'id_additionalFaetures' => substr($post['id'],3)]);
                if($del){
                    return 'Добавить!';
                }
            }else{
                $add = new HotelAndAdditionalFeatures();
                $add->id_hotel = substr($post['id_additional'],4);
                $add->id_additionalFaetures = substr($post['id'],3);
                $add->save();
                return 'Удалить!';
            }
        }
    }
    public function actionAjaxreviewdelete(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $idand2 = HotelAndReviews::deleteAll(['id'=>$post['id']]);
            $idrev2 = Reviews::deleteAll(['id'=>$post['id_review']]);
            if ($idrev2 && $idand2){
                return true;
            }
        }
    }
    public function actionAjaxreviewdeletetour(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $idand2 = Reviewstours::deleteAll(['id'=>substr($post['id'], 7)]);
            if ($idand2){
                return true;
            }
        }
    }
    public function actionAjaxattractionsdelete(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $idand2 = Attractions::deleteAll(['id'=>substr($post['id'], 4)]);
            if ($idand2){
                return true;
            }
        }
    }
    public function actionAjaxsliderdelete(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $idand2 = Slider::deleteAll(['id'=>substr($post['id'],6)]);
            if ($idand2){
                return true;
            }
        }
    }
    public function actionAjaxadditionaldelete(){
        if(Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $idand2 = HotelAndAdditionalFeatures::deleteAll(['id_additionalFaetures'=> substr($post['id'],3), 'id_hotel'=> substr($post['id_additional'],4)]);
            if ($idand2){
                return true;
            }
        }
    }
    public function actionAjaxaditionaltourdelete(){
    if(Yii::$app->request->isAjax) {
        $post = Yii::$app->request->post();
        $idand2 = Aditionaltours::deleteAll(['id'=> substr($post['id'],3)]);
        if ($idand2){
            return true;
        }
    }
}
    public function actionAditionalfeatures(){
        $model = AdditionalFeatures::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => AdditionalFeatures::find(),
        ]);
        if(Yii::$app->request->isPost){
            return $this->render('aditionalfeatures',compact('model', 'dataProvider'));
        }
        return $this->render('aditionalfeatures',compact('model', 'dataProvider'));
    }
    public function actionAddaditionalfeatures(){

        $feature = new AdditionalFeatures();
        $img = new UploadImage();
        if($feature->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post())){
            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $feature->img = '/web/uploads/' . $img->img->name;
            }
            $feature->save();
            $model = AdditionalFeatures::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => AdditionalFeatures::find(),
            ]);
            return $this->render('aditionalfeatures', compact('model', 'dataProvider'));
        }else{
            return $this->render('addaditionalfeatures', compact('feature','img'));
        }
    }
    public function actionDeleteaditionalfeatures(){
        $slider = AdditionalFeatures::deleteAll(['id'=>Yii::$app->request->get('id')]);
        if($slider==true) {
            return $this->render('deleteaditionalfeatures');
        }else{
            return $this->render('aditionalfeatures');
        }
    }
    public function actionUpdateaditionalfeatures(){
        $model = AdditionalFeatures::find()
            ->where(['id' => Yii::$app->request->get('id')]) // Specify multiple conditions
            ->one();
        $img = new UploadImage();


        if($model->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post())){

            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }


            $model->save();
            $model = AdditionalFeatures::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => AdditionalFeatures::find(),
            ]);
            return $this->render('aditionalfeatures',compact('model', 'dataProvider'));
        }

        return $this->render('updateaditionalfeatures',['model'=>$model, 'img'=>$img]);
    }
    public function actionTours(){
        $model = Tours::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Tours::find(),
        ]);
        if(Yii::$app->request->isPost){
            return $this->render('tours',compact('model', 'dataProvider'));
        }
        return $this->render('tours',compact('model', 'dataProvider'));
    }
    public function actionToursadd(){
        $slider = new Tours();
        $img = new UploadImage();
        //$img2 = new UploadSlider();

        $post = Yii::$app->request->post();
        if($slider->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post()) /*&& $img2->load(Yii::$app->request->post())*/){
            $img->img = UploadedFile::getInstance($img,'img');
            //$img2->img = UploadedFile::getInstances($img2,'img');
            if($img->img!==null) {
                $img->upload();
                $slider->img = '/web/uploads/' . $img->img->name;
            }
            echo "<pre>";
            print_r($slider);
            echo "</pre>";
            //$img2->upload();
            $slider->save();
            /*foreach ($img2->img as $item) {
                $sl = new Slider();
                $sl->url ='/web/uploads/'. $item->name;
                $hotel = Hotel::find()->where(['name'=> $post['hotel']['name']])->one();
                $sl->id_item = $hotel->id;
                $sl->save();
            }*/

            $model = Tours::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => Tours::find(),
            ]);
            return $this->render('tours', compact('model', 'dataProvider'));
        }else{
            return $this->render('toursadd', compact('slider','img'));
        }
    }
    public function actionTourdelete(){
        $slider = Tours::deleteAll(['id'=>Yii::$app->request->get('id')]);
        if($slider==true) {
            return $this->render('tourdelete');
        }else{
            return $this->render('tours');
        }
    }
    public function actionTourupdate(){
        $aditional2 = new Aditionaltours();
        if($aditional2->load(Yii::$app->request->post())){
            foreach ($aditional2->name as $item){
                $add = new Aditionaltours();
                $add->name = $item;
                $add->id_item = 'tour'.Yii::$app->request->get('id');
                $add->save();
            }

        }
        $type = Typetour::find()->all();
        $type = ArrayHelper::map($type,'id','name');
        $aditional = Aditionaltours::find()->where(['id_item' => Yii::$app->request->get('id')])->all();
        $model = Tours::find()
            ->where(['id' => Yii::$app->request->get('id')]) // Specify multiple conditions
            ->one();
        $img = new UploadImage();
        $img2 = new UploadSlider();

        $slider = Slider::find()->where(['id_item' => Yii::$app->request->get('id')])->all();
        //$review = HotelAndReviews::find()->leftJoin('Reviews', 'Reviews.id = hotelAndReviews.id_review')->where(['hotelAndReviews.id_hotel' => Yii::$app->request->get('id')])->all();

        $review = Reviewstours::find()->where(['id_item' => Yii::$app->request->get('id')])->all();

        if($model->load(Yii::$app->request->post()) && $img->load(Yii::$app->request->post()) && $img2->load(Yii::$app->request->post())){

            $img->img = UploadedFile::getInstance($img,'img');
            $img2->img = UploadedFile::getInstances($img2,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }
            $img2->upload();
            $model->save();
            foreach ($img2->img as $item) {
                $sl = new Slider();
                $sl->url ='/web/uploads/'. $item->name;
                $sl->id_item = Yii::$app->request->get('id');
                $sl->save();
            }
            $model = Tours::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => Tours::find(),
            ]);
            return $this->render('tours',compact('model', 'dataProvider'));
        }

        return $this->render('tourupdate',compact('model', 'img', 'review', 'slider', 'img2','aditional', 'aditional2', 'type'));
    }

}