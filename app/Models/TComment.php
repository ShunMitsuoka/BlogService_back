<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComment extends Model
{
    use HasFactory;
    protected $table = 't_comments';
    public $timestamps = true;
    protected $fillable = [
        'article_id',
        'content',
    ];
}
