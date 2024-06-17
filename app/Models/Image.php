<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'image',
        'nom',
        'article_id'
    ];

    public function post() {
        $this->belongsTo(Article::class);

    }
}
