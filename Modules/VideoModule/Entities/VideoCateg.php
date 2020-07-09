<?php

namespace Modules\VideoModule\Entities;

use Modules\VideoModule\Entities\Video;
use Illuminate\Database\Eloquent\Model;
use Modules\VideoModule\Entities\VideoCategTranslation;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class VideoCateg extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'videocategs';
    protected $fillable = ['created_by'];
    public $translatedAttributes = ['title'];
    public $translationModel = VideoCategTranslation::class;

    public function vidcateg()
    {
        return $this->hasMany(Video::class);
    }
}
