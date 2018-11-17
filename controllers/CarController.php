<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/17/18
 * Time: 11:26 AM
 */

namespace app\controllers;


use yii\web\Controller;

class CarController extends  Controller
{
    public function actionBest()
    {
        return $this->render('best');
    }
}