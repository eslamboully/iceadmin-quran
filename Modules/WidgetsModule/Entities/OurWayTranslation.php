<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class OurWayTranslation extends Model
{
    protected $fillable = ['title','content'];
    public $timestamps = false;
    protected $table = 'our_ways_translation';
}
