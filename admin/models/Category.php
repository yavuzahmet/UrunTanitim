<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $categoryID
 * @property string $category_name
 * @property string $category_description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name', 'category_description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryID' => 'Category ID',
            'category_name' => 'Category Name',
            'category_description' => 'Category Description',
        ];
    }
}
