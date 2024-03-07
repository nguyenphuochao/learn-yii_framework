<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

// var_dump($posts);
?>
<h1>List Post</h1>
<?php  if(Yii::$app->session->hasFlash('mess')): ?>
        <div class="alert alert-success"><?php echo Yii::$app->session->getFlash('mess'); ?></div>
<?php endif; ?>

<?= Html::a('Create', ['/post/create'], ['class' => 'btn btn-primary mb-2']) ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($posts) > 0) : ?>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td scope="row"><?= $post->id ?></td>
                    <td><?= $post->name ?></td>
                    <td><?= $post->description ?></td>
                    <td><?= $post->category_id ?></td>
                    <td>
                        <a href="#" class="btn btn-primary">View</a>
                        <a href="#" class="btn btn-warning">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td>No record</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>