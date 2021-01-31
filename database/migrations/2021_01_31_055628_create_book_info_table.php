<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_info', function (Blueprint $table) {
            $table->id();
            $table->string('book_title', 255)->nullable('false');
            $table->string('author_name');
            $table->string('student_name');
            $table->string('contact_number');
            $table->string('issue_books');
            $table->string('return_books');
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
        Schema::dropIfExists('book_info');
    }
}
