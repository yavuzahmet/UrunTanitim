<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property integer $aboutID
 * @property string $aboutText
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutText'], 'required'],
            [['aboutText'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutID' => 'ID',
            'aboutText' => 'Açıklama',
        ];
    }
}
