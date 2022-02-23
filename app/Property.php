<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = ['title', 'name' ,'descricao', 'rental_price', 'sale_price'];

    public $timestamps = false;
}

