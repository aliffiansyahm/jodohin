<?php

namespace frontend\services;

use yii\db\Query;

class ProfileService
{
    public function getUserDetails($id_user)
    {
        $user = (new Query())
            ->from("pengguna")
            ->where('IDPENGGUNA=:id_user', [
                ':id_user' => $id_user,
            ])->one();
        return $user;
    }

    public function getSelfPosts($id_user)
    {
        $self_posts = (new Query())
            ->from("post")
            ->where('IDPENGGUNA=:id_user', [
                ':id_user' => $id_user,
            ])->all();
        return $self_posts;
    }

    public function getSelfPhotos($id_user)
    {
        $self_photos = (new Query())
            ->select(['IDPOST', 'GAMBARPOST'])
            ->from("post")
            ->where("IDPENGGUNA=:id_user AND GAMBARPOST != ''", [
                ':id_user' => $id_user,
            ])
            ->orderBy('IDPOST DESC')
            ->limit(9)->all();
        return $self_photos;
    }

    public function getFollowers($id_user)
    {
        $followers = (new Query())
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGIKUT = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id_user])
            ->all();
        return $followers;
    }

    public function getFollowersLimit10($id_user)
    {
        $followers = (new Query())
            ->from('follow')
            ->join('JOIN', 'pengguna', 'follow.IDPENGIKUT = pengguna.IDPENGGUNA')
            ->where('follow.IDPENGGUNA=:id_pengguna', [':id_pengguna' => $id_user])
            ->limit(10)->all();
        return $followers;
    }

    public function countFollowers($id_user)
    {
        $followers = (new Query())
            ->from("follow")
            ->where('IDPENGGUNA=:id_user', [
                ':id_user' => $id_user,
            ])->count();
        return $followers;
    }

    public function countFollowing($id_user)
    {
        $followers = (new Query())
            ->distinct()
            ->from("follow")
            ->where('IDPENGIKUT=:id_user', [
                ':id_user' => $id_user,
            ])->count();
        return $followers;
    }

    public function countPhotos($id_user)
    {
        $photos = (new Query())
            ->from("post")
            ->where("IDPENGGUNA=:id_user AND GAMBARPOST != ''", [
                ':id_user' => $id_user,
            ])->count();
        return $photos;
    }

    public function countPosts($id_user)
    {
        $posts = (new Query())
            ->from("post")
            ->where("IDPENGGUNA=:id_user", [
                ':id_user' => $id_user,
            ])->count();
        return $posts;
    }
}