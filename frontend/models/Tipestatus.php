<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipestatus".
 *
 * @property int $IDSTATUS
 * @property string $NAMASTATUS
 *
 * @property Hubungan[] $hubungans
 */
class Tipestatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipestatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMASTATUS'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDSTATUS' => 'Idstatus',
            'NAMASTATUS' => 'Namastatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHubungans()
    {
        return $this->hasMany(Hubungan::className(), ['IDSTATUS' => 'IDSTATUS']);
    }
}
