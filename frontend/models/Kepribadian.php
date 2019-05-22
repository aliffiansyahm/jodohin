<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kepribadian".
 *
 * @property int $IDKEPRIBADIAN
 * @property string $NAMAKEPRIBADIAN
 * @property string $DESKRIPSIKEPRIBADIAN
 *
 * @property Pengguna[] $penggunas
 */
class Kepribadian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kepribadian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMAKEPRIBADIAN'], 'string', 'max' => 100],
            [['DESKRIPSIKEPRIBADIAN'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDKEPRIBADIAN' => 'Idkepribadian',
            'NAMAKEPRIBADIAN' => 'Namakepribadian',
            'DESKRIPSIKEPRIBADIAN' => 'Deskripsikepribadian',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenggunas()
    {
        return $this->hasMany(Pengguna::className(), ['IDKEPRIBADIAN' => 'IDKEPRIBADIAN']);
    }
}
