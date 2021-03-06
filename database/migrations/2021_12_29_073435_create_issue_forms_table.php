<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('orderId');
            $table->bigInteger('phno');
            $table->string('email');
            $table->date('issue_date');
            $table->string('return_date');
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
        Schema::dropIfExists('issue_forms');
    }
}
