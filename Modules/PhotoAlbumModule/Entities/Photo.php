<?php

namespace Modules\PhotoAlbumModule\Entities;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Photo extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'photos';
    public $translatedAttributes = ['title'];
    protected $fillable = ['photo', 'photo_categ_id'];
    public $translationModel = PhotoTranslation::class;

    public function photocateg()
    {
        return $this->belongsTo(PhotoCateg::class);
    }
}

