<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ssilkiid".
 *
 * @property int $num
 * @property string|null $naim
 * @property string|null $id
 */
class Ssilkiid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ssilkiid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim', 'id'], 'string', 'max' => 255],
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
