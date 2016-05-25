<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\admin\models\Category;;


/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm 

<?=$form->field($model, 'categoryID')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'categoryID','category_name'),
        ['prompt'=>'Kategori Seç']
    );?>

    */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
 
    <?= $form->field($model, 'categoryID')->textInput() ?>

	<?= $form->field($model, 'file')->fileInput() ?>

	<?= $form->field($model, 'product_salary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_decription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
