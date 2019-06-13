<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pesan".
 *
 * @property int $IDPESAN
 * @property int $IDPENGIRIMPESAN
 * @property int $IDTIPEPESAN
 * @property int $IDPENERIMAPESAN
 * @property string $ISIPESAN
 * @property string $WAKTUPESAN
 *
 * @property Pengguna $pENGIRIMPESAN
 * @property Pengguna $pENERIMAPESAN
 * @property Tipepesan $tIPEPESAN
 */
class Pesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGIRIMPESAN', 'IDTIPEPESAN', 'IDPENERIMAPESAN'], 'integer'],
            [['WAKTUPESAN'], 'safe'],
            [['ISIPESAN'], 'string', 'max' => 200],
            [['IDPENGIRIMPESAN'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGIRIMPESAN' => 'IDPENGGUNA']],
            [['IDPENERIMAPESAN'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENERIMAPESAN' => 'IDPENGGUNA']],
            [['IDTIPEPESAN'], 'exist', 'skipOnError' => true, 'targetClass' => Tipepesan::className(), 'targetAttribute' => ['IDTIPEPESAN' => 'IDTIPEPESAN']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPESAN' => 'Idpesan',
            'IDPENGIRIMPESAN' => 'Idpengirimpesan',
            'IDTIPEPESAN' => 'Idtipepesan',
            'IDPENERIMAPESAN' => 'Idpenerimapesan',
            'ISIPESAN' => 'Isipesan',
            'WAKTUPESAN' => 'Waktupesan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGIRIMPESAN()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGIRIMPESAN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENERIMAPESAN()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENERIMAPESAN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPEPESAN()
    {
        return $this->hasOne(Tipepesan::className(), ['IDTIPEPESAN' => 'IDTIPEPESAN']);
    }
}
