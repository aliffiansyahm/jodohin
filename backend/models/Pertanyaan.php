<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pertanyaan".
 *
 * @property int $IDPERTANYAAN
 * @property string $PERTANYAAN
 * @property string $PILIHAN1
 * @property string $PILIHAN2
 * @property string $PILIHAN3
 * @property string $PILIHAN4
 */
class Pertanyaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pertanyaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PERTANYAAN'], 'string', 'max' => 500],
            [['PILIHAN1', 'PILIHAN2', 'PILIHAN3', 'PILIHAN4'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPERTANYAAN' => 'Idpertanyaan',
            'PERTANYAAN' => 'Pertanyaan',
            'PILIHAN1' => 'Pilihan1',
            'PILIHAN2' => 'Pilihan2',
            'PILIHAN3' => 'Pilihan3',
            'PILIHAN4' => 'Pilihan4',
        ];
    }
}
