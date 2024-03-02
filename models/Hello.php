<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Hello extends Model
{
    // Tạo các thuộc tính
    public $username;
    public $name;
    public $email;

    // Tạo các phương thức
    public function setUser($username, $name, $email)
    {
        $this->username = $username;
        $this->name = $name;
        $this->email = $email;
    }
    public function getUser()
    {
        return $this->username . '<br>' . $this->name . '<br>' . $this->email;
    }
}
