<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuebooks', function (Blueprint $table) {
            $table->id();
            $table->string('book_category');
            $table->string('book_set');
            $table->string('fullname');
            $table->bigInteger('phno');
            $table->string('email');
            $table->date('issue_date');
            $table->date('return_date');
            $table->string('address');
            $table->string('agreement I');
            $table->string('agreement II');
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
        Schema::dropIfExists('issuebooks');
    }
}
