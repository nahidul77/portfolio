<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'sub_title',
        'description',
        'fb_link',
        'tw_link',
        'in_link',
        'git_link',
        'service_head',
        'portfolio_head',
        'about_head',
        'resume',
        'profile_img',
        'fav_img'
    ];
}
