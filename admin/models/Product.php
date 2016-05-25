<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $productID
 * @property string $product_name
 * @property string $product_decription
 * @property string $product_salary
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name'], 'required'],
            [['product_decription'], 'string'],
            [['file'],'file'],
            [['productID'], 'integer'],
            [['product_name','imageUrl','product_salary'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'productID' => 'Ürün ID',
            'product_name' => 'Ürün Adı',
            'product_decription' => 'Ürün Açıklama',
            'product_salary' => 'Ürün Fiyatı',
            'file' => 'Ürün Resmi',
        ];
    }
}
