<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'empresa';
}
