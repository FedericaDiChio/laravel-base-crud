<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // protected $table = 'comics';
    protected $fillable = ['title', 'price', 'series', 'type', 'sale_date', 'description', 'thumb'];
}
