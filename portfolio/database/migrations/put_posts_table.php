<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PutPostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->date('date');
            $table->string('read_time');
            $table->string('sub_title');
            $table->text('text1');
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            // Add any other post-related fields here
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
