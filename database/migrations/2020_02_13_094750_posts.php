<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('item_name', 20);
            $table->string('company', 30);
            $table->float('price',11,2);
            $table->float('discount', 3)->nullable();
            $table->enum('unit', ['litter', 'kg','piece',]);
           $table->enum('type', ['grocery', 'kryana','makeup','vegetables','food','fruits','null'])->default('null');
         
           $table->float('total',11,2);
           $table->enum('delivery', ['on','charges'])->default('charges');
           $table->string('heading', 20)->nullable();
           $table->string('image', 50);
           $table->integer('qty');
            $table->time('opening')->nullable();
            $table->time('closing')->nullable();
            $table->string('area', 50)->nullable();
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
        Schema::dropIfExists('product_posts');
    }
}
