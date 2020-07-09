<?php

namespace Modules\TripModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\TripModule\Entities\TripCategory;
use Modules\TripModule\Entities\TripPhotos;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Trip extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes =
        [
            'title',
            'description',
            'short_desc',
            'tour_vehicles',
            'tour_option',
            'note',
            'meta_title',
            'meta_desc',
            'meta_keywords',
            'slug',
            'include',
            'not_include',
        ];

    protected $fillable = ['id','trip_category_id', 'photo', 'price', 'days', 'hours', 'cover'];

    protected $guarded = [];

    public $translationModel = TripTranslate::class;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trips';

    # Relations.
    public function categories()
    {
        return $this->belongsToMany(TripCategory::class, 'trip_categ_pivot', 'trip_id', 'category_id');

    }

    public function photos()
    {
        return $this->hasMany(TripPhotos::class);
    }

    public function program()
    {
        return $this->hasMany(TripProgram::class);
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'trip_destination', 'trip_id', 'destination_id');
    }



}
