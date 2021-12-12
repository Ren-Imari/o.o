<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m211212_120809_create_tasks_table extends Migration
{/**
 * {@inheritdoc}
 */
    public function up()
    {
        $this->createTasks();
        $this->createTasksToUser();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%tasks}}');
        $this->dropTable('{{%tasks_to_users}}');
    }
    private function createTasks(){
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
        ]);
        $this->insert('tasks', [
            'id' => 1,
            'name' => 'Home_work',
            'description' => 'Сделать д/з',
        ]);
        $this->insert('tasks', [
            'id' => 2,
            'name' => 'Exams',
            'description' => 'Подготовить материал',
        ]);
        $this->insert('tasks', [
            'id' => 3,
            'name' => 'Books',
            'description' => 'Прочесть книгу',
        ]);
        $this->insert('tasks', [
            'id' => 4,
            'name' => 'Purchases',
            'description' => 'Купить продукты',
        ]);
    }
    private function createTasksToUser(){
        $this->createTable('tasks_to_users', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'user_id' => $this->integer(),
        ]);
        $this->insert('tasks_to_users', [
            'id' => 1,
            'task_id' => 1,
            'user_id' => 5,
        ]);
        $this->insert('tasks_to_users', [
            'id' => 2,
            'task_id' => 2,
            'user_id' => 5,
        ]);
        $this->insert('tasks_to_users', [
            'id' => 3,
            'task_id' => 3,
            'user_id' => 5,
        ]);
    }
}
