<?php

namespace frontend\controllers;

use frontend\models\Pengguna;
use yii\db\Query;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionIndex($id = null)
    {
        if (is_null($id)) {
            $id = $_SESSION['id'];
        }
        $pengguna = (new Query())
            ->from('pengguna')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->one();
        return $this->render('index', compact('pengguna'));
    }

    public function actionUpdate($id)
    {

    }

    public function actionFollowers($id = null)
    {
        if (is_null($id)) {
            $id = $_SESSION['id'];
        }
        $pengguna = (new Query())
            ->from('follow')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->all();
        return $this->render('index', compact('pengguna'));
    }


}
