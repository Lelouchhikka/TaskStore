<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_data', function (Blueprint $table) {
            $table->id('task_id');
            $table->String('task_description');
            $table->String('task_title');
            $table->Integer('site_id');
            $table->Integer('site_task_id');
            $table->Integer('site_task_type');
            $table->Integer('site_user_id');
            $table->String('task_locale');
            $table->Float('cost_execution');
            $table->Integer('max_executions');
            $table->Integer('time_perform');
            $table->Integer('time_checking');
            $table->Integer('check_type');
            $table->Integer('user_utc');
            $table->Integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_data');
    }
}
