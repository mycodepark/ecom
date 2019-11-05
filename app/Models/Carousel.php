<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{

    /**
     * @var string
     */
    protected $table = 'carousels';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'featured', 'menu', 'image'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'featured'  =>  'boolean',
        'menu'      =>  'boolean'
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
