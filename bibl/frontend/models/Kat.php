<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kat".
 *
 * @property int $num
 * @property string|null $naim
 */
class Kat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim'], 'string', 'max' => 255],
            [['naim'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'naim' => 'Naзвание',
        ];
    }
}
