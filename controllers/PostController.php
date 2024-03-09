<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\web\NotFoundHttpException;
class PostController extends \yii\web\Controller
{

    // lấy danh sách bài viết
    public function actionIndex()
    {
        $this->layout = 'crud'; // layout cho crud

        $posts = Post::find()->all();
        return $this->render('index', ['posts' => $posts]);
    }
    // thêm bài viết
    public function actionCreate()
    {
        $this->layout = 'crud'; // layout cho crud
        $post = new Post();
        $formData = Yii::$app->request->post();
        if ($post->load($formData)) {
            if ($post->save()) {
                Yii::$app->getSession()->setFlash('mess', 'Add success');
                return $this->redirect(['/post']);
            } else {
                Yii::$app->getSession()->setFlash('mess', 'Add fail');
            }
        }

        return $this->render('create', ['post' => $post]);
    }
    // xem chi tiết bài viết
    public function actionView($id)
    {
        $this->layout = 'crud'; // layout cho crud
        $post = Post::findOne($id);
        return $this->render('view', ['post' => $post]);
    }
    // cập nhật bài viết
    public function actionUpdate($id)
    {
        $this->layout = 'crud'; // layout cho crud
        $post = Post::findOne($id);
        if ($post->load(Yii::$app->request->post()) && $post->save()) {
            Yii::$app->getSession()->setFlash('mess', 'Add success');
            return $this->redirect(['/post']);
        } else {
            return $this->render('update', ['post' => $post]);
        }
    }
    // xóa bài viết
    public function actionDelete($id){
        $post = Post::findOne($id);
        if($post){
            Yii::$app->getSession()->setFlash('mess', 'Delete success');
            $post->delete();
            return $this->redirect(['/post']);
        }else{
            throw new NotFoundHttpException;
        }
        
    }
}
