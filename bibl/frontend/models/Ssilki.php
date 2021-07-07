<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ssilki".
 *
 * @property int $num
 * @property string $naim
 */
class Ssilki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ssilki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim'], 'required'],
            [['naim'], 'string', 'max' => 240],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'naim' => 'Naim',
        ];
    }
}
