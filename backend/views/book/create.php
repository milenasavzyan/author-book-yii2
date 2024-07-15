<?php
///* @var $this \yii\web\View */
///* @var $model \common\models\Book */
//
//use common\models\Author;
//use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//
//
//$this->title = 'Create Book';
//?>
<!---->
<!---->
<?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<!---->
<!---->
<?php //= $form->field($model, 'title')->textInput() ?>
<!---->
<?php //= $form->field($model, 'description')->textInput() ?>
<!---->
<?php //= $form->field($model, 'publication_year')->textInput() ?>
<!---->
<?php //= $form->field($model, 'image')->fileInput(['class' => 'form-control']) ?>
<?php ////= $form->field($uploadForm, 'imageFile')->fileInput() ?>
<!---->
<!---->
<?php //= $form->field($model, 'authors')->dropDownList(
//    Author::find()->select(['CONCAT(first_name, " ", last_name) AS full_name', 'id'])
//        ->indexBy('id')
//        ->column(),
//    ['prompt' => 'Select Author']
//) ?>
<!---->
<!--    <hr>-->
<!---->
<?php //= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
<!---->
<!---->
<!---->
<?php //ActiveForm::end() ?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Author;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Create Book';
//$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publication_year')->textInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'author_ids[]')->dropDownList(
        Author::find()->select(['CONCAT(first_name, " ", last_name) AS full_name', 'id'])
            ->indexBy('id')
            ->column(),
        ['prompt' => 'Select Author']
    ) ?>
    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

