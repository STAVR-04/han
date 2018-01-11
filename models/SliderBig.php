<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 20.12.2017
 * Time: 10:01
 */

namespace app\models;


use yii\db\ActiveRecord;

class SliderBig extends ActiveRecord
{
    public static function tableName()
    {
        return 'SliderBig';
    }

    public function attributeLabels()
    {
        return [
            'title'=>'Заголовок',
            'url' => 'Ссылка',
        ];
    }

    public function rules(){

        return [
            [['id'],'trim'],
            [['title'],'required', 'message' => 'Поле обязаельно для заполнения'],
            [['img'],'file', 'extensions' =>'png, jpg, svg'],
            [['url'], 'required'],

        ];

    }
}