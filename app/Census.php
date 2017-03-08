<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Census extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function parseBooleanZipIt()
    {
        return $this->attributes['promo_zip_it'] ? 'TRUE' : 'FALSE';
    }
    public function parseBooleanCrayola()
    {
        return $this->attributes['promo_crayola_bunding'] ? 'TRUE' : 'FALSE';
    }
    public function parseBooleanNone()
    {
        return $this->attributes['promo_none'] ? 'TRUE' : 'FALSE';
    }
}
