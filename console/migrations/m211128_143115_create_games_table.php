<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%games}}`.
 */
class m211128_143115_create_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%games}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'genre' => $this->string(),
            'cost' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%games}}');
    }
}
