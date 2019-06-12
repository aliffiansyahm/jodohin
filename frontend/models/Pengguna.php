<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $IDPENGGUNA
 * @property int $IDKEPRIBADIAN
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property string $NAMA
 * @property string $TANGGALLAHIR
 * @property string $ALAMAT
 * @property string $BIO
 * @property string $FOTO
 * @property string $JENISKELAMIN
 * @property Follow[] $follows
 * @property Follow[] $follows0
 * @property Hobikepengguna[] $hobikepenggunas
 * @property Hubungan[] $hubungans
 * @property Hubungan[] $hubungans0
 * @property Komentar[] $komentars
 * @property Notifikasi[] $notifikasis
 * @property Notifikasi[] $notifikasis0
 * @property Kepribadian $kEPRIBADIAN
 * @property Pesan[] $pesans
 * @property Pesan[] $pesans0
 * @property Post[] $posts
 * @property Suka[] $sukas
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDKEPRIBADIAN'], 'integer'],
            [['TANGGALLAHIR'], 'safe'],
            [['EMAIL', 'NAMA'], 'string', 'max' => 100],
            [['PASSWORD'], 'string', 'max' => 32],
            [['ALAMAT', 'BIO'], 'string', 'max' => 200],
            [['FOTO'], 'string', 'max' => 300],
            [['JENISKELAMIN'], 'string', 'max' => 10],
            [['IDKEPRIBADIAN'], 'exist', 'skipOnError' => true, 'targetClass' => Kepribadian::className(), 'targetAttribute' => ['IDKEPRIBADIAN' => 'IDKEPRIBADIAN']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPENGGUNA' => 'Idpengguna',
            'IDKEPRIBADIAN' => 'Idkepribadian',
            'EMAIL' => 'Email',
            'PASSWORD' => 'Password',
            'NAMA' => 'Nama',
            'TANGGALLAHIR' => 'Tanggallahir',
            'ALAMAT' => 'Alamat',
            'BIO' => 'Bio',
            'FOTO' => 'Foto',
            'JENISKELAMIN' => 'Jeniskelamin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFollows()
    {
        return $this->hasMany(Follow::className(), ['IDPENGIKUT' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFollows0()
    {
        return $this->hasMany(Follow::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHobikepenggunas()
    {
        return $this->hasMany(Hobikepengguna::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHubungans()
    {
        return $this->hasMany(Hubungan::className(), ['IDPENGGUNA2' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHubungans0()
    {
        return $this->hasMany(Hubungan::className(), ['IDPENGGUNA1' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifikasis()
    {
        return $this->hasMany(Notifikasi::className(), ['IDPENERIMANOTIF' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifikasis0()
    {
        return $this->hasMany(Notifikasi::className(), ['IDPENGIRIMNOTIF' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKEPRIBADIAN()
    {
        return $this->hasOne(Kepribadian::className(), ['IDKEPRIBADIAN' => 'IDKEPRIBADIAN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesans()
    {
        return $this->hasMany(Pesan::className(), ['IDPENGIRIMPESAN' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesans0()
    {
        return $this->hasMany(Pesan::className(), ['IDPENERIMAPESAN' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSukas()
    {
        return $this->hasMany(Suka::className(), ['IDPENGGUNA' => 'IDPENGGUNA']);
    }
}
