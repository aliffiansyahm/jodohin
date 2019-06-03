<?php

namespace backend\models;

use yii\base\Model;

/**
 * This is the model class for table "tipenotifiikasi".
 *
 * @property int $IDTYPENOTIFIKASI
 * @property string $TIPENOTIFIKASI
 *
 * @property Notifikasi[] $notifikasis
 */
class Chat extends model
{
    public $pengirim;
    public $penerima;

    public function attributeLabels()
    {
        return [
            'pengirim' => 'pengirim',
            'penerima' => 'penerima',
        ];
    }
}
