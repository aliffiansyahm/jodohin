<?php


namespace frontend\services;
use frontend\models\Notifikasi;
use frontend\models\Pengguna;
use yii\db\Query;

class MainServices
{
    public function bacaColek()
    {
      $colekan = Notifikasi::find()
        ->where(['IDPENERIMANOTIF' => $_SESSION['id']])
        ->andWhere(['STATUSNOTIFIKASI'=>1])
        ->andWhere(['IDTYPENOTIFIKASI'=>3])
        ->all();

      return $colekan;
    }

    public function bacaNotifPesan(){
      $colekan = Notifikasi::find()
        ->where(['IDPENERIMANOTIF' => $_SESSION['id']])
        ->andWhere(['STATUSNOTIFIKASI'=>1])
        ->andWhere(['IDTYPENOTIFIKASI'=>1])
        ->all();

      return $colekan;
    }
    public function bacaNotifLain(){
      $colekan = Notifikasi::find()
        ->where(['IDPENERIMANOTIF' => $_SESSION['id']])
        ->andWhere(['STATUSNOTIFIKASI'=>1])
        ->andWhere(['IDTYPENOTIFIKASI'=>2])
        ->all();

      return $colekan;
    }
    public function bacaUser($id){
      $model = Pengguna::find()
      ->where(['IDPENGGUNA' => $id])
      ->one();
      return $model;
    }

    public function getFollowers($id)
    {
        $followers = (new Query())
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGIKUT = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->all();
        return $followers;
    }
}
