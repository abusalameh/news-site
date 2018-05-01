<?php

namespace News;

use News\NewsArticle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    protected $guarded = [];

    public function getNameAttribute($value)
    {
    	$name = "name_" . App::getLocale();
    	return $this->{$name} ? $this->{$name} : $this->name_ar;
    }

    public function articles()
    {
    	return $this->hasMany(Article::class,'category_id','id');
    }

}
