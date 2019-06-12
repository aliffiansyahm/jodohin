<?php

namespace frontend\controllers;

use frontend\models\Pengguna;
use frontend\models\Hubungan;
use frontend\models\Notifikasi;
use frontend\models\Tipenotifikasi;
use frontend\models\Tipestatus;
// use  yii\web\Session;
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
        $notif = Notifikasi::find()
        ->where(['IDPENERIMANOTIF'=>$_SESSION['id']])
        ->all();
        // print_r($notif);
        return $this->render('index', [
            'notif' => $notif,
        ]);
    }

    public function actionUpdate($id)
    {

    }

    public function actionFind(){

      // $session = ii::$app->session;
      $idKu = $_SESSION['idkepribadian'];
      // echo $idKu;
      if($idKu == 1){
        $idDia = 2;
      } else if ($idKu == 2){
        $idDia = 1;
      } else if ($idKu == 3){
        $idDia = 4;
      } else {
        $idDia = 3;
      }

      // print_r($ada);
        // echo $i;
        // echo $ada[0];
        // echo $ada[1];
       $dataJodoh = Pengguna::find()
       ->where(['IDKEPRIBADIAN' => $idDia])
       ->andWhere(array('not in', 'JENISKELAMIN', array($_SESSION['jeniskelamin'])))

       // ->andWhere(array('not in', 'IDPENGGUNA', array($ada)))
       ->all();
       // print_r($dataJodoh);
      return $this->render('find', [
          'dataJodoh' => $dataJodoh,
          // 'ada' => $ada,
      ]);
    }

    public function actionSesi(){
      return $this->render('halsesi');
    }

    public function actionColek($id){
      $hubungan = new Hubungan();
      $hubungan->IDSTATUS = 2;
      $hubungan->IDPENGGUNA1 = $_SESSION['id'];
      $hubungan->IDPENGGUNA2 = $id;
      $hubungan->save();

      $notif = new Notifikasi();
      $notif->IDPENGIRIMNOTIF = $_SESSION['id'];
      $notif->IDPENERIMANOTIF = $id;
      $notif->IDTYPENOTIFIKASI = 3;
      $notif->ISI = "Ada yang mencolek anda";
      $notif->save();

      return $this->redirect('find');
    }
}
