<?php

namespace app\controllers;

use app\models\Post;
use Yii;

class PostController extends \yii\web\Controller
{

    // lấy danh sách bài viết
    public function actionIndex()
    {
        $this->layout = 'crud'; // layout cho crud

        $posts = Post::find()->all();
        return $this->render('index',['posts' => $posts]);
    }
    // thêm bài viết
    public function actionCreate(){
        $this->layout = 'crud'; // layout cho crud
        $post = new Post();
        $formData = Yii::$app->request->post();
         if($post->load($formData)){
         if($post->save()){
                Yii::$app->getSession()->setFlash('mess','Add success');
                return $this->redirect(['/post']);
            }else{
                Yii::$app->getSession()->setFlash('mess','Add fail');    
            }
        }

        return $this->render('create' , ['post' => $post]);
    }

}
