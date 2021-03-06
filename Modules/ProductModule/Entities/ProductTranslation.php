<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    protected $fillable = ['title','slug', 'description', 'overview', 'tech_specs', 'accessories','meta_title', 'meta_desc', 'meta_keywords'];
    public $timestamps = false;
    protected $table = 'product_translations';
}
