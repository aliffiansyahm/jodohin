<?php

namespace frontend\controllers;

use frontend\models\Pengguna;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // $model = Pengguna::find()
        // ->where(['EMAIL' => $email,
        //         'PASSWORD' => $password])
        // ->one();

        // return $this->render('index',[
        //     'pengguna' => $model,
        // ]);

        return $this->render('index');
    }

    public function actionUpdate($id)
    {

    }

}
