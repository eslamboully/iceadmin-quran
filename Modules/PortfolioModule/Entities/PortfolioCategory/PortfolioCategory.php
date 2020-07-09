<?php

namespace Modules\PortfolioModule\Entities\PortfolioCategory;
use Modules\PortfolioModule\Entities\Portfolio\Portfolio;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class PortfolioCategory extends Model  implements TranslatableContract
{
    use Translatable;

    protected $table = 'portfolio_category';
    protected $fillable = ['created_by','cover_photo'];
    public $translatedAttributes = ['title', 'description','meta_title', 'meta_desc', 'meta_keywords','slug'];
    public $translationModel = PortfolioCategoryTranslation::class;

  

    public function portfolios(){
        return $this->belongsToMany(Portfolio::class,'category__portfolio__pivots','category_id','portfolio_id');
    }
}
