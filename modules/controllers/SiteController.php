<?php

namespace app\modules\controllers;
use yii;
use yii\web\Controller;
use app\modules\models\AdminUser;

/**
 * Default controller for the `admin` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin(){
        $model = new AdminUser();

        $request = Yii::$app->request;
        //if(){

        //}
        //print_r($request->post('AdminUser'));

        return $this->render('login',['model'=>$model]);
    }
}