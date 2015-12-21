<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';

    protected $fillable = [
        'entry_title',
        'entry_description',
        'entry_img',
        'entry_start_date',
        'entry_end_date',
        'entry_status',
        'meta_title',
        'meta_description'
    ];
}
