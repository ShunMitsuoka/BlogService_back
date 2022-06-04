<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCategory extends Model
{
    use HasFactory;use HasFactory;
    protected $table = 't_categories';
    public $timestamps = true;
    protected $fillable = [
        'category_name',
    ];
}
