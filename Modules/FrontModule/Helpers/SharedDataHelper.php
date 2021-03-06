<?php


namespace Modules\FrontModule\Helpers;


use Modules\BlogModule\Entities\Blog;
use Illuminate\Support\Facades\Schema;
use Modules\ConfigModule\Entities\Config;
use Modules\WidgetsModule\Entities\WorkHours;
use Modules\FrontModule\Helpers\arabicdate;
use Modules\BlogModule\Entities\BlogCategory;
use Modules\VideoModule\Entities\VideoCateg;

class SharedDataHelper
{




    public  static  function  getConfig(){
        $configArr = [];

        $all = Config::all();
        foreach ($all as $item) {
            if ($item->is_static == 0){
                $configArr[$item->var] = $item->value;
            }else{
                $configArr[$item->var] = $item->static_value;
            }

        }
        return $configArr;
    }
    public  static  function  getWorkHour(){
        $WorkArr = [];

        $all = WorkHours::all()->first();
//        foreach ($all as $item) {
//            $WorkArr[$item] = $item;
//        }
        return $all;
    }



}
