<?php

/* @var $this \yii\web\View */
/* @var $searchModel \backend\models\BookSearch */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use andrewdanilov\adminpanel\models\User;
use andrewdanilov\adminpanel\models\UserSearch;
use andrewdanilov\gridtools\FontawesomeActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Html;

$this->title = 'Book';

?>

    <div class="form-group">
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

<?= GridView::widget([
    'filterModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'id',
            'headerOptions' => ['width' => 100],
        ],
        'title',
        'description',
        [
            'attribute' => 'Authors',
            'value' => function ($model) {
                $authors = $model->authors;
                if ($authors !== null) {
                    $authorNames = [];
                    foreach ($authors as $author) {
                        $authorNames[] = $author->fullName;
                    }
                    return implode(', ', $authorNames);
                } else {
                    return ''; // Handle case where authors are null
                }
            },
            'format' => 'raw',
        ],
        [
            'class' => FontawesomeActionColumn::class,
            'template' => '{update}{delete}',
        ]
    ]
]) ?>