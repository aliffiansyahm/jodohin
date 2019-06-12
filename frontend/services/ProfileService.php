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

    public function countFollowers($id_user)
    {
        $followers = (new Query())
            ->from("follow")
            ->where('IDPENGGUNA=:id_user', [
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