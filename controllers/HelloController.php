<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Hello;

class HelloController extends Controller{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionUser(){
        $model = new Hello();
        $model->setUser('haohao','Hảo','hao@gmail.com');
        echo $model->getUser();
    }
}
