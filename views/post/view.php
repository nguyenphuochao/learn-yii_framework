<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

// var_dump($posts);
?>
<h1>View Post</h1>

<ul>
    <li><?= $post->name ?></li>
    <li><?= $post->description ?></li>
    <li><?= $post->category_id ?></li>
</ul>