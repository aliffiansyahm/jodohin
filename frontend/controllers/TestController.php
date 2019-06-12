<?php


namespace frontend\controllers;

use yii\db\Query;
use yii\web\Controller;


class TestController extends Controller
{
    public function actionTest()
    {
        $test = (new Query())->from('pengguna')->all();
        $this->render('/test/test/test', compact('test'));
    }
}