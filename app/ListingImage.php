<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingImage extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        
        
        return $this->belongsT('App\Listing', 'listing_id', 'id');
    }
}
