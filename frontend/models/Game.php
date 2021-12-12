<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Game extends ActiveRecord
{
    public static function tableName()
    {
        return '{{games}}';
    }
    public function rules()
    {
        return [
            [['name', 'genre', 'cost'], 'required']
        ];
    }


}