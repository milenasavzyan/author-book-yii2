<?php
/* @var $this \yii\web\View */
/* @var $model \common\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Create Author';
?>


<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'first_name')->textInput() ?>

<?= $form->field($model, 'last_name')->textInput() ?>

<?= $form->field($model, 'biography')->textInput() ?>


    <hr>

<?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>


<?php ActiveForm::end() ?>