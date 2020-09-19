<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challanges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('easy_wpm')->default(0);
            $table->integer('medium_wpm')->default(0);
            $table->integer('hard_wpm')->default(0);
            $table->integer('alladin_wpm')->default(0);
            $table->integer('tempest_wpm')->default(0);
            $table->integer('python_wpm')->default(0);
            $table->integer('c_wpm')->default(0);
            $table->integer('java_wpm')->default(0);
            $table->integer('cplusplus_wpm')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'))->toDateString();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->toDateString();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challanges');
    }
}
