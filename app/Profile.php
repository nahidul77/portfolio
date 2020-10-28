<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'fb_link',
        'tw_link',
        'in_link',
        'git_link',
        'profile_img'
    ];
}
