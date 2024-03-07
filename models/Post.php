<?php

namespace app\models;

class Post extends \yii\db\ActiveRecord
{

    public $name;
    public $description;
    public $category_id;
    
    public static function tableName()
    {
        return 'posts';
    }
    public function rules()
    {
        return [
            [['name', 'description', 'category_id'], 'required']
        ];
    }
}
