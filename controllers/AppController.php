<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 20.12.2017
 * Time: 10:52
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{

    public function debug($arr){
        echo '<pre>'.$arr.'</pre>';
    }

}