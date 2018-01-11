<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 08.01.2018
 * Time: 13:56
 */

namespace app\models;


use yii\db\ActiveRecord;

class Tours extends ActiveRecord
{
    public static function tableName()
    {
        return 'tours';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name'=>'Нзвание',
            'price' => 'Цена',
            'complexity' => 'Сложность тура',
            'content' => 'Описание',
            'img' => 'картинка',
            'x' => 'Координата Х',
            'y' => 'Координата У',
            'description' => 'Описание для поисковиков',
            'keywords' => 'Ключевые слова',
            'days' => 'количество дней',
            'type' => 'Тип тура',
        ];
    }

    public function rules(){

        return [
            [['id', 'x', 'y'],'trim'],
            [['name','price','complexity','content', 'x', 'y', 'description', 'keywords', 'days'],'required'],
            ['days', 'integer'],
            ['type', 'required'],
            [['img'],'file', 'extensions' =>'png, jpg, svg'],
            ['complexity', 'double', 'max' => 3],
            [['description'],'string', 'max' => 160, 'min' => 10],

        ];

    }
}