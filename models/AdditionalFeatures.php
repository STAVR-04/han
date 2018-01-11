<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 05.01.2018
 * Time: 14:09
 */

namespace app\models;


use yii\db\ActiveRecord;

class AdditionalFeatures extends ActiveRecord
{
    public static function tableName()
    {
        return 'additionalFeatures';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'title'=>'Описание',
            'img' => 'картинка',
        ];
    }

    public function rules(){

        return [
            [['id'],'trim'],
            [['title','img'],'required'],
            [['img'],'file', 'extensions' =>'png, jpg, svg'],

        ];

    }
}