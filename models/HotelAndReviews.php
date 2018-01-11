<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 04.01.2018
 * Time: 15:36
 */

namespace app\models;


use yii\db\ActiveRecord;

class HotelAndReviews extends ActiveRecord
{
    public static function tableName()
    {
        return 'hotelAndReviews';
    }
    public function getReviews(){
        return $this->hasOne(Reviews::className(), ['id' => 'id_review']);
    }
}