<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $table = 't_articles_categories';
    public $timestamps = true;
    protected $fillable = [
        'article_id',
        'category_id',
    ];
}
