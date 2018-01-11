<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 09.01.2018
 * Time: 11:18
 */

namespace app\models;


use yii\db\ActiveRecord;

class Typetour extends ActiveRecord
{
    public static function tableName()
    {
        return 'typetours';
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
            [['id'],'trim'],
            [['name'],'trim'],

        ];

    }
}