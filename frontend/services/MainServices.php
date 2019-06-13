<?php


namespace frontend\services;
use yii\db\Query;

class MainServices
{
    public function getFollowers($id)
    {
        $followers = (new Query())
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGIKUT = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id])
            ->all();
        return $followers;
    }
    
    public function getUserDetails($id_user)
    {
        $user = (new Query())
            ->from("pengguna")
            ->where('IDPENGGUNA=:id_user', [
                ':id_user' => $id_user,
            ])->one();
        return $user;
    }
}