<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany('App\ListingImage', 'listing_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'agent_id', 'id');
    }
}
