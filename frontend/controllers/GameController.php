<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Game;

class GameController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Game();
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Game added');
            return $this->redirect(['game/index']);

        }
        return $this->render('create',[
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Game::findOne($id);
        $model -> delete();
        Yii::$app->session->setFlash('success', 'Deleted!');
        return $this->redirect(['game/index']);
    }

    public function actionIndex()
    {
        $gameList = Game::find()->all();
        return $this->render('index',[
            'gameList'=> $gameList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Game::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Game updated');
            return $this->redirect(['game/index']);

        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
