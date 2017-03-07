<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Census extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
}
