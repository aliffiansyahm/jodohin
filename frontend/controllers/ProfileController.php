<?php
namespace frontend\controllers;
use frontend\models\Follow;
use frontend\models\Pengguna;
use frontend\models\Hubungan;
use frontend\models\Notifikasi;
use frontend\models\Post;
use frontend\models\Tipenotifikasi;
use frontend\models\Tipestatus;
use Yii;
use yii\db\Query;
use yii\web\Controller;
use yii\web\UploadedFile;

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


        public function actionTerimacolek($id){
    echo "terima";
        $notif = NOTIFIKASI::find()
        ->where(['IDNOTIFIKASI'=>$id])
        ->one();
        // echo $notif->IDPENGIRIMNOTIF;

        $hub = HUBUNGAN::find()
        ->where(['IDPENGGUNA2'=>$notif->IDPENERIMANOTIF,'IDPENGGUNA1'=>$notif->IDPENGIRIMNOTIF])
        ->one();

        $hub->IDSTATUS = 3;
        $hub->save();

        $hubunganbaru = new HUBUNGAN();
        $hubunganbaru->IDSTATUS = 3;
        $hubunganbaru->IDPENGGUNA1 = $notif->IDPENERIMANOTIF;
        $hubunganbaru->IDPENGGUNA2 = $notif->IDPENGIRIMNOTIF;
        $hubunganbaru->save();

        $notifbaru = new NOTIFIKASI();
        $notifbaru->IDPENGIRIMNOTIF = $notif->IDPENERIMANOTIF;
        $notifbaru->IDPENERIMANOTIF = $notif->IDPENGIRIMNOTIF;
        $notifbaru->IDTYPENOTIFIKASI = 2;
        $notifbaru->ISI = "Permintaan anda di terima";
        $notifbaru->save();

        $follow1 = new FOLLOW();
        $follow1->IDPENGGUNA = $notif->IDPENERIMANOTIF;
        $follow1->IDPENGIKUT = $notif->IDPENGIRIMNOTIF;
        $follow1->save();

        $follow2 = new FOLLOW();
        $follow2->IDPENGGUNA = $notif->IDPENGIRIMNOTIF;
        $follow2->IDPENGIKUT = $notif->IDPENERIMANOTIF;
        $follow2->save();

        $notif->delete();

        echo "done";

        }

        public function actionTolakcolek($id){
    echo "tolak";
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

    public function actionFollowgan($id)
    {
        if (Yii::$app->request->isGet) {
            $follow = new Follow();
            $follow->IDPENGGUNA = $id;
            $follow->IDPENGIKUT = $_SESSION['id'];
            $follow->save();
        }
        return $this->redirect(Yii::$app->request->BaseUrl . "/profile/index?id=" . $id);
    }

    public function actionSettings()
    {
        $pengguna = (new Query())
            ->from('pengguna')
            ->where('IDPENGGUNA=:id_pengguna', [':id_pengguna' => $_SESSION['id']])
            ->one();
        return $this->render('settings', compact('pengguna'));
    }

    public function actionSettingsstore()
    {
        if (Yii::$app->request->isPost) {
            $model = Pengguna::findOne($_SESSION['id']);
            $model->EMAIL = Yii::$app->request->post('EMAIL');
            $model->NAMA = Yii::$app->request->post('NAMA');
            $model->TANGGALLAHIR = date('Y-m-d', strtotime(Yii::$app->request->post('datetimepicker')));
            $model->ALAMAT = Yii::$app->request->post('ALAMAT');
            $model->BIO = Yii::$app->request->post('BIO');
            $model->JENISKELAMIN = Yii::$app->request->post('JENISKELAMIN');
            $model->save(false);
//            return $this->render('settings', compact('pengguna'));
        }
        return $this->redirect(Yii::$app->request->BaseUrl . "/profile/settings");

    }

}
