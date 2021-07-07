<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teg".
 *
 * @property int $num
 * @property string $naim
 */
class Teg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teg';
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
            'naim' => 'Название',
        ];
    }
}
