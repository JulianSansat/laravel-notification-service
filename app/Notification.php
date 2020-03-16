<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;

    const VALIDATION = [
        'user_id'          =>  'required',
        'author_id'        =>  'required',
        'title'            =>  'required',
        'body'             =>  'required',
        'action_url'       =>  'required'
    ];

    protected $guarded = [];
}
