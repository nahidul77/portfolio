<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'service_head',
        'portfolio_head',
        'about_head',
        'resume',
        'fav_img'
    ];
}
