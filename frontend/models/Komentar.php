<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "komentar".
 *
 * @property int $IDKOMENTAR
 * @property int $IDPENGGUNA
 * @property int $IDPOST
 * @property string $ISIKOMENTAR
 * @property string $WAKTUKOMENTAR
 *
 * @property Post $pOST
 * @property Pengguna $pENGGUNA
 */
class Komentar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komentar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGGUNA', 'IDPOST'], 'integer'],
            [['ISIKOMENTAR'], 'required'],
            [['WAKTUKOMENTAR'], 'safe'],
            [['ISIKOMENTAR'], 'string', 'max' => 200],
            [['IDPOST'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['IDPOST' => 'IDPOST']],
            [['IDPENGGUNA'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGGUNA' => 'IDPENGGUNA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDKOMENTAR' => 'Idkomentar',
            'IDPENGGUNA' => 'Idpengguna',
            'IDPOST' => 'Idpost',
            'ISIKOMENTAR' => 'Isikomentar',
            'WAKTUKOMENTAR' => 'Waktukomentar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPOST()
    {
        return $this->hasOne(Post::className(), ['IDPOST' => 'IDPOST']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }
}
