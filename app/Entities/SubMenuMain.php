<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SubMenuMain extends Model
{
    protected $table = "sub_menu_mains";

    protected $fillable = [
        'id_menu_main',
        'name',
        'class',
        'level'
    ];
}
