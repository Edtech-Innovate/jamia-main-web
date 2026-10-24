<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // id (bigint(20) unsigned, auto_increment)
            $table->string('name'); // name (varchar 255)
            $table->string('slug'); // slug (varchar 255)
            $table->string('image')->nullable(); // image (varchar 255, nullable)
            $table->text('short_description'); // short_description (text)
            $table->longText('content'); // content (longtext)
            $table->timestamps(); // created_at & updated_at (timestamp, nullable)
            $table->timestamp('verified_at')->nullable(); // verified_at (timestamp, nullable)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}