<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffrewardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 职工奖惩-中间表
        Schema::create('staff_reward', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_id');
            $table->string('reward_id');
            $table->string('time')->comment('奖惩时间');
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
        //
        Schema::dropIfExists('staff_reward');
    }
}
