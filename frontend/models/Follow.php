<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "follow".
 *
 * @property int $IDFOLLOW
 * @property int $IDPENGGUNA
 * @property int $IDPENGIKUT
 *
 * @property Pengguna $pENGIKUT
 * @property Pengguna $pENGGUNA
 */
class Follow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'follow';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGGUNA', 'IDPENGIKUT'], 'integer'],
            [['IDPENGIKUT'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGIKUT' => 'IDPENGGUNA']],
            [['IDPENGGUNA'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGGUNA' => 'IDPENGGUNA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDFOLLOW' => 'Idfollow',
            'IDPENGGUNA' => 'Idpengguna',
            'IDPENGIKUT' => 'Idpengikut',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGIKUT()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGIKUT']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }
}
