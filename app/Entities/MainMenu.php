<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    protected $table = "main_menus";

    protected $fillable = [
        'name',
        'url',
        'class',
        'level'
    ];

}
