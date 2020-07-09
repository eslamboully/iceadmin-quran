<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\WidgetsModule\Entities\OurWayTranslation;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class OurWay extends Model implements TranslatableContract
{
	use Translatable;

	protected $table = 'our_ways';
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['photo'];
    public $translationModel = OurWayTranslation::class;
}
