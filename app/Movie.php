<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';
    protected $filltable = ['imDB', 'title', 'year', 'genre', 'poster'];
}
