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
        $followers = (new Query())
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGIKUT = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->all();
        $pengguna = (new Query())
            ->from('pengguna')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->one();
//        var_dump($followers);
        return $this->render('followers', compact('followers', 'pengguna'));
    }

    public function actionPhotos($id = null)
    {
        if (is_null($id)) {
            $id = $_SESSION['id'];
        }
        $photos = (new Query())
            ->from("post")
            ->where("IDPENGGUNA=:id_user AND GAMBARPOST != ''", [
                ':id_user' => $id,
            ])->all();
        $pengguna = (new Query())
            ->from('pengguna')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->one();
//        var_dump($followers);
        return $this->render('photos', compact('photos', 'pengguna'));
    }
}
