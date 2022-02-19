<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title')->default(NULL);
            $table->string('title_size')->default(NULL);
            $table->string('title_color')->default(NULL);
            $table->string('title_anim')->default(NULL);
            $table->string('title_style')->default(NULL);

            $table->string('sub_title')->default(NULL);
            $table->string('sub_title_size')->default(NULL);
            $table->string('sub_title_color')->default(NULL);
            $table->string('sub_title_anim')->default(NULL);
            $table->string('sub_title_style')->default(NULL);


            $table->string('description')->default(NULL);
            $table->string('description_size')->default(NULL);
            $table->string('description_color')->default(NULL);
            $table->string('description_anim')->default(NULL);
            $table->string('description_style')->default(NULL);

            $table->string('position')->default(NULL);
            $table->string('status')->default(NULL);
            $table->string('btn_text')->default(NULL);
            $table->string('btn_link')->default(NULL);
            $table->integer('type')->default(NULL);
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
        Schema::dropIfExists('banners');
    }
}
