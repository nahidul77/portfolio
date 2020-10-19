<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'view_site',
        'pa_img',
        'pb_img',
        'pc_img',
        'pd_img',
        'pe_img',
    ];
}
