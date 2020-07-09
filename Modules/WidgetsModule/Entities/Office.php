<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Modules\WidgetsModule\Entities\OfficeTranslation;

class Office extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'offices';
    protected $fillable = ['photo'];
    public $translatedAttributes = ['title','description'];
    public $translationModel = OfficeTranslation::class;

}
