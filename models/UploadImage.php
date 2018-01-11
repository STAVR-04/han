<?php

namespace app\models;

use yii\base\Model;

class UploadImage extends Model{

 public $img;
    public function attributeLabels()
    {
        return [
            'img' => 'Изображение записи',
        ];
    }
     public function rules(){
     return[
            [['img'], 'file', 'extensions' => 'png, jpg, svg'],
        ];
 }

 public function upload(){
if($this->validate() && $this->img!==null){
$this->img->saveAs("uploads/{$this->img->baseName}.{$this->img->extension}");
return true;
}else{
return false;
}
}

}