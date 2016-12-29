<?php

namespace app\modules\controllers;

use Yii;
use app\modules\models\WarehouseInfo;
use app\modules\models\WarehouseInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
//use yii\filters\auth\HttpBasicAuth;

/**
 * WarehouseController implements the CRUD actions for WarehouseInfo model.
 */
class WarehouseController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            //认证方法过滤器
            /*'basicAuth' => [
                'class' => HttpBasicAuth::className(),
            ],*/
            /*'access' => [
                'class'=> AccessControl::className(),
                //'only' => ['create','update','index','delete','view'],
                'rules' =>
                 [
                     //允许认证用户访问
                    [
                        'actions' => ['view','index','create','update','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ],
            ],*/
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all WarehouseInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WarehouseInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        /*if(Yii::$app->user->isGuest){
            echo 'you';exit();
        }*/
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WarehouseInfo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WarehouseInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WarehouseInfo();

        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->url = UploadedFile::getInstance($model,"url");
            $dir = Yii::$app->params['img_path']."/warehouse_img/".date('Ymd');
            if(!is_dir($dir)){
                mkdir($dir);
            }
            if($model->validate()){
                $fileName = date("YmdHis").rand(10,99).uniqid().$model->url->baseName.".".$model->url->extension;
                $dir = $dir."/".$fileName;
                $model->url->saveAs($dir);
                $model->url = "/warehouse_img/".date('Ymd').'/'.$fileName;
            }
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WarehouseInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->request->isPost){
            $oldImg = $model->url;
            $model->load(Yii::$app->request->post());
            $model->url = $oldImg;
            $obj = UploadedFile::getInstance($model,'url');
            if($obj->name){
                //删除旧图
                if(!empty($oldImg)){
                    unlink(Yii::$app->params['img_path'].$oldImg);
                }
                $model->url = $obj;
                $dir = Yii::$app->params['img_path'].'/warehouse_img/'.date('Ymd');
                if(!is_dir($dir)){
                    mkdir($dir);
                }
                $fileName = date("YmdHis").rand(10,99).uniqid().$model->url->baseName.".".$model->url->extension;
                $dir = $dir."/".$fileName;
                $model->url->saveAs($dir);
                $model->url = "/warehouse_img/".date('Ymd').'/'.$fileName;
            }

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WarehouseInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if(!empty($model->url)){
            unlink(Yii::$app->params['img_path'].$model->url);
        }
        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the WarehouseInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WarehouseInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WarehouseInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
