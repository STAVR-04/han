<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 22.12.2017
 * Time: 11:44
 */

namespace app\models;


use yii\db\ActiveRecord;

class hotel extends ActiveRecord
{
 public static function tableName()
 {
     return 'hotel';
 }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name'=>'Нзвание',
            'district' => 'район',
            'price' => 'Цена',
            'star' => 'Количество звезд',
            'content' => 'Описание',
            'img' => 'картинка',
            'x' => 'Координата Х',
            'y' => 'Координата У',
            'description' => 'Описание для поисковиков',
            'keywords' => 'Ключевые слова',
        ];
    }

    public function rules(){

        return [
            [['id', 'x', 'y'],'trim'],
            [['name','district','price','star','content', 'x', 'y', 'description', 'keywords'],'required'],
            [['img'],'file', 'extensions' =>'png, jpg, svg'],
            ['star','double'],
            [['description'],'string', 'max' => 160, 'min' => 10],

        ];

    }
}