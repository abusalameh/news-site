<?php

namespace News;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use News\Category;

class Article extends Model
{
    protected $dates    = ['publish_date'];
    protected $guarded  = [];
    protected $table    = 'articles';

    public function getHeadLineAttribute()
    {
        $headline = "headline_" . App::getLocale();
        return $this->{$headline} ? $this->{$headline} : $this->headline_ar;
    }

    public function getSummaryAttribute()
    {
        $summary = "summary_" . App::getLocale();
        return $this->{$summary} ? $this->{$summary} : $this->summary_ar;
    }

    public function gettextAttribute()
    {
        $text = "text_" . App::getLocale();
        return $this->{$text} ? $this->{$text} : $this->text_ar;
    }


    public function author()
    {
        return $this->belongsTo(User::class,'author_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }


}
