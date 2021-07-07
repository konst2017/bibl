<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tegid".
 *
 * @property int $num
 * @property string|null $naim
 * @property int|null $id
 */
class Tegid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tegid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
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
            'id' => 'ID',
        ];
    }
}
