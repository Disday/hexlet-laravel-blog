<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['name', 'state', 'description'];

    public function articles()  
    {
        return $this->hasMany(__NAMESPACE__ . '\Article', 'category_id');
    }
}
