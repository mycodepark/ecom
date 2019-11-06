<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * @var string
     */
    protected $table = 'messages';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];




}
