<?php

namespace Modules\FrontModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ConfigModule\Entities\Config;

class SalahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'fagr',
            'ar' => [
                'display_name' => 'الفجر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'Fagr',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'elShoroq',
            'ar' => [
                'display_name' => 'الشروق',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elShoroq',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'elzohr',
            'ar' => [
                'display_name' => 'الظهر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elzohr',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'elassr',
            'ar' => [
                'display_name' => 'العصر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elassr',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'elmogreb',
            'ar' => [
                'display_name' => 'المغرب',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elmogreb',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'eleshaa',
            'ar' => [
                'display_name' => 'العشاء',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'eleshaa',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'elgomaa',
            'ar' => [
                'display_name' => 'الجمعة',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elgomaa',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        ////////////////////////////////
        ///
        ///
        ///
        ///

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_fagr',
            'ar' => [
                'display_name' => 'وقت الفجر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'Fagr time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_elShoroq',
            'ar' => [
                'display_name' => 'وقت الشروق',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elShoroq time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_elzohr',
            'ar' => [
                'display_name' => 'وقت الظهر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elzohr time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_elassr',
            'ar' => [
                'display_name' => 'وقت العصر',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elassr time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_elmogreb',
            'ar' => [
                'display_name' => 'وقت المغرب',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elmogreb time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_eleshaa',
            'ar' => [
                'display_name' => 'وقت العشاء',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'eleshaa time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);

        $config = Config::create([
            'is_static' => 1,
            'static_value' => '',
            'var' => 'time_elgomaa',
            'ar' => [
                'display_name' => 'وقت الجمعة',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'elgomaa time',
                'value' => '',
            ],
            'type' => 1,
            'category_id' => 7
        ]);


        // $this->call("OthersTableSeeder");
    }
}
