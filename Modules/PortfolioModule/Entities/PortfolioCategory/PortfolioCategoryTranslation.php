<?php

namespace Modules\PortfolioModule\Entities\PortfolioCategory;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategoryTranslation extends Model
{
    protected $fillable = ['title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'];
    public $timestamps = false;
    protected $table = 'portfolio_categ_trans';
}
