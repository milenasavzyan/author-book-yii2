<?php

namespace backend\controllers;

use andrewdanilov\adminpanel\controllers\BackendController;
use backend\models\AuthorSearch;
use common\models\Author;
use Yii;

class AuthorController extends BackendController
{
    public function actionIndex()
    {
        $searchModel = new AuthorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);
    }
    public function actionUpdate($id)
    {
        $model = Author::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}