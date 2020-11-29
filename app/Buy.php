<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table = 'buy';
    protected $fillable = ['id', 'user_id', 'item_id'];
}
