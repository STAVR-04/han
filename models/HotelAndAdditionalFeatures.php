<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 05.01.2018
 * Time: 14:12
 */

namespace app\models;


use yii\db\ActiveRecord;

class HotelAndAdditionalFeatures extends ActiveRecord
{
    public static function tableName()
    {
        return 'hotelAndAdditionalFeatures';
    }
    public function getAdditionalFeatures(){
        return $this->hasOne(AdditionalFeatures::className(), ['id' => 'id_additionalFaetures']);
    }
}