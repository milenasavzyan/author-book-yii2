<?php
namespace andrewdanilov\adminpanel\controllers;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\Response;
use andrewdanilov\adminpanel\models\UserSearch;

class UserController extends BackendController
{
    public $loginFormClass;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!is_dir($this->viewPath)) {
            $this->viewPath = '@andrewdanilov/adminpanel/views/user';
        }
        if (!$this->loginFormClass) {
            $this->loginFormClass = 'andrewdanilov\adminpanel\models\LoginForm';
        }
        parent::init();
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//        $loginForm = new $this->loginFormClass;
//        if ($loginForm->load(Yii::$app->request->post()) && $loginForm->validate() && $loginForm->login()) {
//            return $this->goBack();
//        }
//        if (Yii::$app->getSession()->getFlash('error') == 'access-denied') {
//            // if we here because of access denied
//            $loginForm->addError('username', 'Access denied for this user.');
//        }
//        $this->layout = '//login';
//        return $this->render('login', [
//            'model' => $loginForm,
//        ]);
//    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionIndex()
    {
        $searchModel = new UserSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpdate($id=null)
    {
        /* @var ActiveRecord|IdentityInterface $identityClass */
        $identityClass = Yii::$app->user->identityClass;
        if ($id === null) {
            $model = new $identityClass();
        } else {
            $model = $identityClass::findOne(['id' => $id]);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        /* @var ActiveRecord|IdentityInterface $identityClass */
        $identityClass = Yii::$app->user->identityClass;
        $identityClass::findOne(['id' => $id])->delete();
        return $this->redirect(['index']);
    }
}
