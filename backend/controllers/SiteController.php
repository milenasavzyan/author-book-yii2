<?php

namespace backend\controllers;

use andrewdanilov\adminpanel\controllers\BackendController;
use Yii;

/**
 * Site controller
 */
class SiteController extends BackendController
{
    public $loginFormClass = 'backend\models\LoginForm';
    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }


}
