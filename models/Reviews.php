<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 04.01.2018
 * Time: 12:45
 */

namespace app\models;


use yii\db\ActiveRecord;

class Reviews extends ActiveRecord
{
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
            [['id'],'trim'],
            [['name','review'],'required']

        ];

    }
}