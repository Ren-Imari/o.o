<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Task;
use frontend\controllers\behaviors\AccessBehavior;
use yii\rbac\CheckAccessInterface;

class TaskController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }

    public function actionIndex()
    {
        $this->checkAccess();
        $taskList = Task::find()->all();
        return $this->render('index',[
            'taskList'=> $taskList,
        ]);
    }

    public function actionCreate()
    {
        $this->checkAccess();
        $model = new Task();
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Task added');
            return $this->redirect(['task/index']);

        }
        return $this->render('create',[
            'model' => $model,
        ]);
    }
    public function actionDelete($id)
    {
        $this->checkAccess();
        $model = Task::findOne($id);
        $model -> delete();
        Yii::$app->session->setFlash('success', 'Deleted!');
        return $this->redirect(['task/index']);
    }
    public function actionUpdate($id)
    {
        $this->checkAccess();
        $model = Task::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Task updated');
            return $this->redirect(['task/index']);

        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }


}
