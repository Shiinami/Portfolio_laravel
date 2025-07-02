<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'project_date',
        'link',
        'client',
    ];
}
