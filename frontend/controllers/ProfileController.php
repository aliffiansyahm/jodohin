<?php
namespace frontend\controllers;
use frontend\models\Pengguna;
use frontend\models\Hubungan;
use frontend\models\Notifikasi;
use frontend\models\Tipenotifikasi;
use frontend\models\Tipestatus;
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

    public function actionFollowing($id = null)
    {
        if (is_null($id)) {
            $id = $_SESSION['id'];
        }
        $followings = (new Query())
            ->distinct()
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGGUNA = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGIKUT=:id_pengguna', [':id_pengguna' => $id])
            ->all();
        $pengguna = (new Query())
            ->from('pengguna')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->one();
//        var_dump($followers);
        return $this->render('following', compact('followings', 'pengguna'));
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
