<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->belongsTo(__NAMESPACE__ . '\ArticleCategory');
    }
    
    public function isPublished()
    {
        return $this->state == 'published';
    }
}
