<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['id','type','question', 'answer1', 'answer2', 'answer3'];
    public $timestamps = false;
}
