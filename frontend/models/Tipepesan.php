<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipepesan".
 *
 * @property int $IDTIPEPESAN
 * @property string $NAMATIPEPESAN
 *
 * @property Pesan[] $pesans
 */
class Tipepesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipepesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMATIPEPESAN'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDTIPEPESAN' => 'Idtipepesan',
            'NAMATIPEPESAN' => 'Namatipepesan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesans()
    {
        return $this->hasMany(Pesan::className(), ['IDTIPEPESAN' => 'IDTIPEPESAN']);
    }
}
