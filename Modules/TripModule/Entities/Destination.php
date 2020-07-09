<?php

namespace Modules\TripModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Destination extends Model implements TranslatableContract
{
    use Translatable;

    protected $guarded = [];

   
    protected $table = 'destinations';

    public $translatedAttributes = ['title', 'description','meta_title','meta_desc','meta_keywords','slug'];

   

    


    # Relations

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'trip_destination', 'destination_id', 'trip_id');
    }
}
