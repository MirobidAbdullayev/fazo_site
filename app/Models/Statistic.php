<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'number_1', 'number_2', 'number_3', 'nymber_4', 'title_1', 'title_2', 'title_3', 'title_4'
    ];
}
