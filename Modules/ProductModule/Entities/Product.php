<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Product extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'products';
    protected $fillable = ['price', 'photo', 'quantity', 'created_by'];
    public $translatedAttributes = ['title','slug', 'description', 'overview', 'tech_specs', 'accessories', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $translationModel = ProductTranslation::class;


    function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category', 'product_id', 'product_category_id')->withTimestamps();
    }


    public function product_photo()
    {
        return $this->hasMany(ProductPhoto::class);
    }

//    function orders(){
//        return $this->belongsToMany(Order::class,"order_products","order_id","product_id");
//    }

}
