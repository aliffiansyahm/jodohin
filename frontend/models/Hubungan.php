<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hubungan".
 *
 * @property int $IDHUBUNGAN
 * @property int $IDSTATUS
 * @property int $IDPENGGUNA1
 * @property int $IDPENGGUNA2
 *
 * @property Pengguna $pENGGUNA2
 * @property Pengguna $pENGGUNA1
 * @property Tipestatus $sTATUS
 */
class Hubungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hubungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDSTATUS', 'IDPENGGUNA1', 'IDPENGGUNA2'], 'integer'],
            [['IDPENGGUNA2'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGGUNA2' => 'IDPENGGUNA']],
            [['IDPENGGUNA1'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGGUNA1' => 'IDPENGGUNA']],
            [['IDSTATUS'], 'exist', 'skipOnError' => true, 'targetClass' => Tipestatus::className(), 'targetAttribute' => ['IDSTATUS' => 'IDSTATUS']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDHUBUNGAN' => 'Idhubungan',
            'IDSTATUS' => 'Idstatus',
            'IDPENGGUNA1' => 'Idpengguna1',
            'IDPENGGUNA2' => 'Idpengguna2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA2()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA1()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTATUS()
    {
        return $this->hasOne(Tipestatus::className(), ['IDSTATUS' => 'IDSTATUS']);
    }
}
