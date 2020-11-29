<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = ['id', 'user_id', 'name', 'image', 'description', 'price'];
}
