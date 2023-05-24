<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->char('no', 1)->unique();
            $table->string('name', 30)->unique();
            $table->char('active_flg', 1)->default('1');
        });
    }

    // CREATE TABLE categories (
    //     id INT PRIMARY KEY AUTO_INCREMENT 
    //     ,NO CHAR(1) UNIQUE NOT NULL
    //     ,NAME VARCHAR(30) UNIQUE NOT NULL
    //     ,active_flg CHAR(1) DEFAULT '1' NOT NULL
    // );

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
