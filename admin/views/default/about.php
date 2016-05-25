<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<div class="jumbotron">
        <h1>Hakkımızda!</h1>

        <?php
                    //var_dump($product);
                    foreach ($about as $key) {
                     
                        ?>

        <p class="lead"><?php echo $key["aboutText"];?></p>

        <?php } ?>
    </div>

</div>
