<?php

namespace frontend\controllers\behaviors;

use yii\base\Behavior;
use Yii;

class AccessBehavior extends Behavior
{
    public function checkAccess(){
        if(Yii::$app->user->isGuest){
            return Yii::$app->controller->redirect(['site/index']);
        }
    }

}