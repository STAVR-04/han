<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadSlider extends Model{

    /**
     * @var UploadedFile[]
     */

    public $img;
    public function attributeLabels()
    {
        return [
            'img' => 'Изображения для слайдера',
        ];
    }
    public function rules(){
        return[
            [['img'], 'file', 'extensions' => 'png, jpg, svg',  'skipOnEmpty' => true, 'maxFiles' => 4,'checkExtensionByMimeType'=>false],
        ];
    }

    public function upload(){
        if($this->validate() && $this->img!==null){
            foreach ($this->img as $file) {
                $file->saveAs("uploads/{$file->baseName}.{$file->extension}");
            }
            return true;
        }else{
            return false;
        }
    }

}