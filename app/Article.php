<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'authors',
        'institute',
        'month',
        'year',
        'volume',
        'number',
        'eskeywords',
        'enkeywords',
        'esabstract',
        'enabstract',
        'enabstract',
        'category',
        'indexnumber',
        'linkpdf',
        'linkheader',
    ];
}
