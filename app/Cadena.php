<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cadena extends Model
{
    use SoftDeletes;
    //
    protected $description = ['description'];
    protected $version = ['version'];
    protected $name = ['name'];
    protected $id = ['id'];
    protected $dates = ['deleted_at'];
}
