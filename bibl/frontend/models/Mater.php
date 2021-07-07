<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mater".
 *
 * @property int $num
 * @property string|null $naim
 * @property string|null $awtor
 * @property string|null $tip
 * @property string|null $kat
 */
class Mater extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mater';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim', 'awtor', 'tip', 'kat', 'content', 'teg'], 'string', 'max' => 255],
            [['naim', 'tip', 'kat'], 'required'],
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
            'awtor' => 'Awtor',
            'tip' => 'Tip',
            'kat' => 'Kat',
            'content' => 'Content',
            'teg' => 'Teg',
        ];
    }
}
