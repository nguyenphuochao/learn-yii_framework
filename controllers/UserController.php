<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {

        $user = new User();
        $list_user = $user->getListUser(); // lấy danh sách user
        $one_user = $user->getOneUser(1); // lấy 1 user
        // data để truyền dữ liệu qua view
        $data = [
            'list_user' => $list_user,
            'one_user' => $one_user
        ];
        return $this->render('index', $data);
    }
}
