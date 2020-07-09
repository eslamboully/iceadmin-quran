<?php

namespace Modules\TripModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class TripProgram extends Model implements TranslatableContract
{

    use Translatable;

    public $translationModel = TripProgramTrans::class;

    public $translatedAttributes = ['description', 'title'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trip_program';

    protected $fillable = ['trip_id'];

    # Relations.
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

}
