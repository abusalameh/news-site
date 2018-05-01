<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $dates    = ['publish_date'];
    protected $guarded  = [];
    protected $table    = 'articles';

    public function setHeadLineAttribute($value)
    {
        $this->attributes['headline'] = str_limit($value,50);
    }

    public function setPublishDateAttribute($value)
    {
        $this->attributes['publish_date'] = Carbon::createFromTimeStamp($value)->diffForHumans();
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id','id');
    }


}
