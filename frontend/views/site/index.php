<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Hello, <?php if (Yii::$app->user->identity)echo Yii::$app->user->identity->username; else echo 'guest' ;?></h1>




    </div>

    <div class="body-content">

        <div class="row">


        </div>

    </div>
</div>
