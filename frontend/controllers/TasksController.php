<?php

namespace frontend\controllers;

use frontend\models\Task;

class TasksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $tasks = new Task();
        $tasks->name = 'First';
        $tasks->description = 'Some desc';
        $tasks->save();
        echo '<pre>';
        print_r($tasks->getErrors());
        echo '<pre>';
        return $this->render('index');
    }

}