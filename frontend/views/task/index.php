<?php
/* @var $this yii\web\View */
/* @var $taskList[] frontend\models\Task */
use yii\helpers\Url;
?>
<h1>Tasks</h1>
<br>
<a href="<?php echo Url::to(['task/create']);?>"class = "btn btn-primary">Create new task</a>
<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach($taskList as $task):?>
        <tr>
            <td><?php echo $task->id;?></td>
            <td><?php echo $task->name;?></td>
            <td><?php echo $task->description;?></td>

            <td><a href="<?php echo Url::to(['task/update', 'id'=>$task->id]);?>">+</a></td>
            <td><a href="<?php echo Url::to(['task/delete', 'id'=>$task->id]);?>">-</a></td>


        </tr>
    <?php endforeach;?>
</table>
