<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 20.12.2017
 * Time: 11:30
 */

namespace app\models;


use yii\db\ActiveRecord;

class SliderSmall extends ActiveRecord
{
    public static function tableName()
    {
        return 'SliderSmall';
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