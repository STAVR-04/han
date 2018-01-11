<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 08.01.2018
 * Time: 15:25
 */

namespace app\models;


use yii\db\ActiveRecord;

class Reviewstours extends ActiveRecord
{
    public static function tableName()
    {
        return 'reviewstours';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name'=>'Имя',
            'review'=>'Отзыв',
        ];
    }

    public function rules(){

        return [
            [['id', 'id_item'],'trim'],
            [['name','review'],'required'],

        ];

    }
}