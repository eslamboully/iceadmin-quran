<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class OfficeTranslation extends Model
{
    protected $fillable = ['title','description'];
    public $timestamps = false;
    protected $table = 'office_translation';
}
