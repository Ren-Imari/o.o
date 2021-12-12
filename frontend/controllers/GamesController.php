<?php

namespace frontend\controllers;

use frontend\models\Game;

class GamesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $games = new Game();
        $games->name = 'First';
        $games->genre = 'RPG';
        $games->cost = 500;
        $games->save();
        echo '<pre>';
        print_r($games->getErrors());
        echo '<pre>';
        return $this->render('index');
    }

}
