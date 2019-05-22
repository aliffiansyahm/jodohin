<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notifikasi".
 *
 * @property int $IDNOTIFIKASI
 * @property int $IDPENGIRIMNOTIF
 * @property int $IDTYPENOTIFIKASI
 * @property int $IDPENERIMANOTIF
 * @property string $ISI
 * @property string $WAKTUNOTIFIKASI
 * @property int $STATUSNOTIFIKASI
 *
 * @property Pengguna $pENERIMANOTIF
 * @property Pengguna $pENGIRIMNOTIF
 * @property Tipenotifiikasi $tYPENOTIFIKASI
 */
class notifikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGIRIMNOTIF', 'IDTYPENOTIFIKASI', 'IDPENERIMANOTIF', 'STATUSNOTIFIKASI'], 'integer'],
            [['WAKTUNOTIFIKASI'], 'safe'],
            [['ISI'], 'string', 'max' => 200],
            [['IDPENERIMANOTIF'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENERIMANOTIF' => 'IDPENGGUNA']],
            [['IDPENGIRIMNOTIF'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGIRIMNOTIF' => 'IDPENGGUNA']],
            [['IDTYPENOTIFIKASI'], 'exist', 'skipOnError' => true, 'targetClass' => Tipenotifiikasi::className(), 'targetAttribute' => ['IDTYPENOTIFIKASI' => 'IDTYPENOTIFIKASI']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDNOTIFIKASI' => 'Idnotifikasi',
            'IDPENGIRIMNOTIF' => 'Idpengirimnotif',
            'IDTYPENOTIFIKASI' => 'Idtypenotifikasi',
            'IDPENERIMANOTIF' => 'Idpenerimanotif',
            'ISI' => 'Isi',
            'WAKTUNOTIFIKASI' => 'Waktunotifikasi',
            'STATUSNOTIFIKASI' => 'Statusnotifikasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENERIMANOTIF()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENERIMANOTIF']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGIRIMNOTIF()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGIRIMNOTIF']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTYPENOTIFIKASI()
    {
        return $this->hasOne(Tipenotifiikasi::className(), ['IDTYPENOTIFIKASI' => 'IDTYPENOTIFIKASI']);
    }
}
