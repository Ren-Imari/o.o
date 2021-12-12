<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Task */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update</h1>

<?php $form = ActiveForm::begin();?>
<?php echo $form->field($model, 'name');?>
<?php echo $form->field($model, 'description');?>
<?php echo Html::submitButton('Save', [
    'class'=> 'btn btn_primary'
])?>
<?php ActiveForm::end();?>
