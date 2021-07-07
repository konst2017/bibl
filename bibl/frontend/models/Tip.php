<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tip".
 *
 * @property int $num
 * @property string|null $naim
 */
class Tip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim'], 'string', 'max' => 255],
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
