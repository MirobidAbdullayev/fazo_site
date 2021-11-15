<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'description', 'photo_1',
        'photo_2', 'photo_3', 'phone_1',
        'phone_2', 'phone_3', 'email_1',
        'email_2', 'email_3', 'link_1',
        'link_2', 'link_3', 'link_4', 'link_5',
        'link_6', 'link_7', 'link_8', 'link_9'
    ];
}
