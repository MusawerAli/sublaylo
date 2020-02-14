<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BusinessDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BusinessDetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('admin_id');
            $table->string('BusinessName');
            $table->char('BusinessContact', 17);
            $table->enum('BusinessType', ['grocery', 'krayana','makeup','vegetables','food','fruits','null'])->default('null');
            $table->enum('reward', ['diamond', 'golden','silver','null'])->default('null');
            $table->string('BusinessAddress', 244);
            $table->string('location')->nullable();
            $table->time('opening')->nullable();
            $table->time('closing')->nullable();
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
        Schema::dropIfExists('BusinessDetails');

    }
}
