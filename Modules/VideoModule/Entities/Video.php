<?php

namespace Modules\VideoModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\VideoModule\Entities\VideoCateg;
use Modules\VideoModule\Entities\VideoTranslation;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Video extends Model  implements TranslatableContract
{
    use Translatable;

    protected $table = 'videos';
    public $translatedAttributes = ['title'];
    protected $fillable = ['link', 'vid_categ_id', 'created_by'];
    public $translationModel = VideoTranslation::class;

    public function vidcateg()
    {
        return $this->belongsTo(VideoCateg::class);
    }
}
