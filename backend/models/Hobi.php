<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hobi".
 *
 * @property int $IDHOBI
 * @property string $NAMAHOBI
 *
 * @property Hobikepengguna[] $hobikepenggunas
 */
class Hobi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hobi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMAHOBI'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDHOBI' => 'Idhobi',
            'NAMAHOBI' => 'Namahobi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHobikepenggunas()
    {
        return $this->hasMany(Hobikepengguna::className(), ['IDHOBI' => 'IDHOBI']);
    }
}
