<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'authors',
        'institute',
        'edition',
        'volume',
        'number',
        'eskeywords',
        'enkeywords',
        'esabstract',
        'enabstract'
    ];
}
