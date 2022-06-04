<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPublicClass extends Model
{
    use HasFactory;
    protected $table = 'm_public_classes';
    public $timestamps = true;
    protected $fillable = [
        'public_class_name',
    ];
}
