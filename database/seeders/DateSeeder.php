<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_data')->insert([
            'site_id'=>1,
            'task_description'=>"Подписаться на страницу https://www.instagram.com/krissti_zarabotai_online/ , зайти на ее подписки  и подписаться  обязательно на все аккаунты в графе ",
            'task_title'=>"❤ПОДПИСКИ И ЛАЙКИ",
            'site_task_id'=>124640,
            'site_task_type'=>11,
            'site_user_id'=>913370,
            'task_locale'=>"ru",
            'cost_execution'=>5,
            'time_perform'=>60,
            'time_checking'=>4320,
            'check_type'=>1,
            'user_utc'=>3,
            'status'=>1,

            'created_at'=>"2021-08-25 17:01:10",
            'updated_at'=>"2021-08-30 12:41:01",
            'max_executions'=>470,
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Клики"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Youtube"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Капча"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Регистрация без активности"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Регистрация с активностью"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Telegram"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Постинг"
        ]);
        DB::table('task_types')->insert([
            'site_id'=>1,
            'task_name'=>"Комментарии"
        ]);
        DB::table('task_types')->insert([
            'task_id'=>11,
            'site_id'=>1,
            'task_name'=>"Соц. сети"
        ]);
        DB::table('task_types')->insert([
            'task_id'=>12,
            'site_id'=>1,
            'task_name'=>"Прочее"
        ]);
        DB::table('task_types')->insert([
            'task_id'=>13,
            'site_id'=>1,
            'task_name'=>"Установка приложений"
        ]);
        DB::table('task_types')->insert([
            'task_id'=>14,
            'site_id'=>1,
            'task_name'=>"Серфинг"
        ]);
        DB::table('task_types')->insert([
            'task_id'=>15,
            'site_id'=>1,
            'task_name'=>"Google отзывы"
        ]);
    }
}
