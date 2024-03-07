<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
    .help-block {
        color: red;
    }
</style>
<h1>Create Post</h1>
<?php $form =  ActiveForm::begin() ?>
<div class="form-group">
    <?= $form->field($post, 'name') ?>
</div>
<div class="form-group">
    <?= $form->field($post, 'description')->textarea(['row' => 6]); ?>
</div>
<div class="form-group">
    <?= $form->field($post, 'category_id')->dropdownList(
        [
            1 => 'item 1',
            2 => 'item 2'
        ],
        ['prompt' => 'Select Category']
    );
    ?>
</div>
<div>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Go back', ['/post'], ['class' => 'btn btn-warning']) ?>
</div>
<?php ActiveForm::end() ?>