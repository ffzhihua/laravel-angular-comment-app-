<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    //添加这两个，最下面的，因为我是手工建表
    protected $table = 'users';
    public $timestamps = true;
}