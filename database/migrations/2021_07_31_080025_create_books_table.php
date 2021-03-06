<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');


            $table->string('slug')->unique();
            $table->tinyInteger('mark');
            $table->string('bookname');

            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('author_id')->references('id')->on('authors');
//            $table->foreignId('author_id')
//                ->nullable()
//                ->constrained('authors')
//                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
