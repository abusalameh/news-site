<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headline_ar',500);
            $table->string('headline_en',500)->nullable()->default(null);
            $table->string('headline_fr',500)->nullable()->default(null);
            $table->string('summary_ar',500)->nullable()->default(null);
            $table->string('summary_en',500)->nullable()->default(null);
            $table->string('summary_fr',500)->nullable()->default(null);
            $table->text('text_ar');
            $table->text('text_en')->nullable()->default(null);
            $table->text('text_fr')->nullable()->default(null);
            $table->string('image',500);
            $table->string('thumb_image',500);
            $table->timestamp('publish_date')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->enum('state', ['DRAFT', 'LIVE','DELETED','APPROVAL']);
            $table->integer('category_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('author_id')->references('id')->on('users');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_articles');
    }
}
