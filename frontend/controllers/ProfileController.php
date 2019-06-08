<?php

namespace frontend\controllers;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate($id)
    {

    }
    public function actionSesi(){
        return $this->render('halsesi');
    }

}
