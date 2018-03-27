<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';
    protected $fillable = ['MSSV','nhom','cau1', 'cau2', 'cau3', 'cau4','Thanhvien1','Thanhvien2'];
    public $timestamps = false;
}
