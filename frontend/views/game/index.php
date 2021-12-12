<?php
/* @var $this yii\web\View */
/* @var $gameList[] frontend\models\Game */
use yii\helpers\Url;
?>
<h1>Games</h1>
<br>
<a href="<?php echo Url::to(['game/create']);?>"class = "btn btn-primary">Create new game</a>
<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Genre</th>
        <th>Cost</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach($gameList as $game):?>
<tr>
    <td><?php echo $game->id;?></td>
    <td><?php echo $game->name;?></td>
    <td><?php echo $game->genre;?></td>
    <td><?php echo $game->cost;?></td>
    <td><a href="<?php echo Url::to(['game/update', 'id'=>$game->id]);?>">+</a></td>
    <td><a href="<?php echo Url::to(['game/delete', 'id'=>$game->id]);?>">-</a></td>


</tr>
<?php endforeach;?>
</table>
