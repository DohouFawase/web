<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function tag() {
        $this->belongsToMany(Tags::class);
    }

    public function img() {
        $this->hasMany(Image::class, 'article_id');

    }
}
