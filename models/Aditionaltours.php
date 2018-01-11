<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 08.01.2018
 * Time: 16:04
 */

namespace app\models;


use yii\db\ActiveRecord;

class Aditionaltours extends ActiveRecord
{
    public static function tableName()
    {
        return 'aditionaltours';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name'=>'Нзвание',
        ];
    }

    public function rules(){

        return [
            [['id','id_item'],'trim'],
            [['name'],'required'],

        ];

    }
}