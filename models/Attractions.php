<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 07.01.2018
 * Time: 14:58
 */

namespace app\models;


use yii\db\ActiveRecord;

class Attractions extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'name' => 'Название достопримечательности',
        ];
    }
    public static function tableName()
    {
        return 'Attractions';
    }
}