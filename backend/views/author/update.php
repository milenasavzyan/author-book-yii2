<?php
/* @var $this \yii\web\View */
/* @var $model \common\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Author';
?>


<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'first_name')->textInput() ?>

<?= $form->field($model, 'last_name')->textInput() ?>

<?= $form->field($model, 'biography')->textInput() ?>


    <hr>

<?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>



<?php ActiveForm::end() ?>