<?php

namespace Modules\PortfolioModule\Entities\Portfolio;

use Illuminate\Database\Eloquent\Model;
use Modules\PortfolioModule\Entities\PortfolioPhoto;
use Modules\PortfolioModule\Entities\PortfolioCategory\PortfolioCategory;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Portfolio extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'portfolio';
    protected $fillable = ['photo','cover_photo', 'created_by'];
    public $translatedAttributes = ['slug', 'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $translationModel = PortfolioTranslation::class;

    # Relation
    public function portfolio_category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    
    public function categories(){
        return $this->belongsToMany(PortfolioCategory::class,'category__portfolio__pivots','portfolio_id','category_id');
    }
    # Relation
    public function portfolio_photo()
    {
        return $this->hasMany(PortfolioPhoto::class);
    }
}
