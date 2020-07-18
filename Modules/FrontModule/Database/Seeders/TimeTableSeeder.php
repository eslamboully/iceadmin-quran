<?php

namespace Modules\FrontModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ConfigModule\Entities\Config;

class TimeTableSeeder extends Seeder
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
    }
}
