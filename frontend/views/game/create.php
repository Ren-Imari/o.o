<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Game */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Create</h1>

<?php $form = ActiveForm::begin();?>
<?php echo $form->field($model, 'name');?>
<?php echo $form->field($model, 'genre');?>
<?php echo $form->field($model, 'cost');?>
<?php echo Html::submitButton('Save', [
        'class'=> 'btn btn_primary'
    ])?>
<?php ActiveForm::end();?>