<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TArticle extends Model
{
    use HasFactory;
    protected $table = 't_articles';
    public $timestamps = true;
    protected $fillable = [
        'post_user_id',
        'status_id',
        'public_class_id',
        'title',
        'content',
        'thumbnailUrl',
        'deleted_flg',
    ];

    public function scopeNotDeleted($query)
    {
        return $query->where('deleted_flg', false);
    }
}
