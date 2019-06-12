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
}