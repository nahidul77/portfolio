<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'site_link',
        'description',
        'img_a',
        'img_b',
        'img_c',
        'img_d',
        'img_e'
    ];
}
