<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipenotifiikasi".
 *
 * @property int $IDTYPENOTIFIKASI
 * @property string $TIPENOTIFIKASI
 *
 * @property Notifikasi[] $notifikasis
 */
class Tipenotifiikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipenotifiikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPENOTIFIKASI'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDTYPENOTIFIKASI' => 'Idtypenotifikasi',
            'TIPENOTIFIKASI' => 'Tipenotifikasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifikasis()
    {
        return $this->hasMany(Notifikasi::className(), ['IDTYPENOTIFIKASI' => 'IDTYPENOTIFIKASI']);
    }
}
