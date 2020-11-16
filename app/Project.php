<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded = [];


    public function newsFeeds(){
        return $this->hasMany(NewsFeed::class);
    }
}
