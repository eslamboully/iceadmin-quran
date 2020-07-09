<?php

namespace Modules\PhotoAlbumModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class PhotoCateg extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'photo_categs';
    public $translatedAttributes = ['title'];
    public $translationModel = PhotoCategTranslation::class;

    public function photocateg()
    {
        return $this->hasMany(Photo::class);
    }
}
