<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MRS extends Model
{
    //
    protected $table = 'MRS';
    protected $primarykey = 'id';
    protected $fillable = ['title', 'repdate', 'addr', 'photo', 'phone'];
}

