<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $IDPOST
 * @property int $IDPENGGUNA
 * @property string $GAMBARPOST
 * @property string $CAPTION
 * @property string $WAKTUPOST
 *
 * @property Komentar[] $komentars
 * @property Pengguna $pENGGUNA
 * @property Suka[] $sukas
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file_gambar;

    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPENGGUNA'], 'integer'],
            [['WAKTUPOST'], 'safe'],
            [['GAMBARPOST', 'CAPTION'], 'string', 'max' => 200],
            [['IDPENGGUNA'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['IDPENGGUNA' => 'IDPENGGUNA']],
            [['file_gambar'], 'file', 'skipOnEmpty' => false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPOST' => 'Idpost',
            'IDPENGGUNA' => 'Idpengguna',
            'GAMBARPOST' => 'Gambarpost',
            'CAPTION' => 'Caption',
            'WAKTUPOST' => 'Waktupost',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['IDPOST' => 'IDPOST']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA()
    {
        return $this->hasOne(Pengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSukas()
    {
        return $this->hasMany(Suka::className(), ['IDPOST' => 'IDPOST']);
    }
}
