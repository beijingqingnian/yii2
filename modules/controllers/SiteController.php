<?php

namespace app\modules\controllers;
use app\modules\models\LoginForm;
use yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin(){
        $model = new LoginForm();

        //if(Yii::$app->request->isPost){
          //$model->load(Yii::$app->request->post());
            //print_r($model);
            //return Yii::$app->user->login('admin', 3600 * 24 * 30);
        //}

        if(!Yii::$app->user->isGuest){
            return $this->goHome();
        }

        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }

        //print_r($request->post('AdminUser'));

        return $this->render('login',['model'=>$model]);
    }
}