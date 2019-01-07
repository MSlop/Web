<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/17/18
 * Time: 11:26 AM
 */

namespace app\controllers;


use app\models\Car;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CarController extends  Controller
{
    /**
     * @return string
     */
    public function actionBest()
    {
        $models = Car::find()->all();
        return $this->render('best', ['models' => $models]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = Car::findOne(['id' => $id]);

        if ($model === null){
            throw new NotFoundHttpException('машина не найдена');
        }
        return $this->render('update', ['model' => $model]);
    }
}