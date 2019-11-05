<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{

    /**
     * @var string
     */
    protected $table = 'outlets';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'phone', 'adress', 'image'
    ];


    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


}
