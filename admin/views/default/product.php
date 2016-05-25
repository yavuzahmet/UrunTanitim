<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-lg-3">
                <h1>Kategoriler</h1>
                     <?php foreach ($category as $key1) {
                        ?>
                <p><a class="btn"><?php echo $key1["category_name"];?></a></p>
                
            <?php } ?>

            </div>
                <?php
                    //var_dump($product);
                    foreach ($product as $key) {
                     
                        ?>
               
            <div class="col-lg-3">
                

                <?php echo Html::img($key["imageUrl"],['width'=>'250px']);?>
                               
                <h2><?php echo $key["product_name"];?></h2>

                <p><?php echo $key["product_decription"];?></p>

                <p><a class="btn btn-default" href="http://localhost:81/advanced/backend/web/index.php?r=admin%2Fproduct%2Fview&id=">İncele</a></p>
            </div>
             <?php } ?>
        </div>

    </div>
</div>
