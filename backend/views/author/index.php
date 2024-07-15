<?php

/* @var $this \yii\web\View */
/* @var $searchModel \backend\models\AuthorSearch */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use andrewdanilov\adminpanel\models\User;
use andrewdanilov\adminpanel\models\UserSearch;
use andrewdanilov\gridtools\FontawesomeActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Html;

$this->title = 'Author';

?>

    <div class="form-group">
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

<?= GridView::widget([
    'filterModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'id',
            'headerOptions' => ['width' => 100],
        ],
        'first_name',
        'last_name',
        'biography',
        [
            'class' => FontawesomeActionColumn::class,
            'template' => '{update}{delete}',
        ]
    ]
]) ?>