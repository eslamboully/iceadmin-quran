<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class ProductCategory extends Model implements TranslatableContract
{
    protected $table = 'product_categories';

    use Translatable;
    public $translatedAttributes = ['title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'];

    protected $fillable = ['parent_id', 'photo', 'created_by'];

    public $translationModel = ProductCategoryTranslation::class;


    function products()
    {
        return $this->belongsToMany(Product::class, 'product_category', 'product_category_id', 'product_id')->withTimestamps();
    }
    /**
     * Making Relation on the SELF-JOIN DB.
     *
     ** NOTE: 2 relations are made in the same model, due to SELF-JOIN.
     *
     * @return
     */
    public function child()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }

   public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id', 'id');
    }

}
