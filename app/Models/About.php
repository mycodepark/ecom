<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    /**
     * @var string
     */
    protected $table = 'abouts';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'adress', 'map'
    ];




}
