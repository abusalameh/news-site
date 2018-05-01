<?php

namespace News;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $dates    = ['publish_date'];
    protected $guarded  = [];
    protected $table    = 'articles';

    public function getHeadLineAttribute($value)
    {
        $this->attributes['headline'] = str_limit($value,50);
    }


    public function author()
    {
        return $this->belongsTo(User::class,'author_id','id');
    }


}
