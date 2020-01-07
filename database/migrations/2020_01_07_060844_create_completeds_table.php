<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clientAssignment');
            $table->string('clientDate');
            $table->longText('AssignmentInto');
            $table->longText('AssignmentConclusion');
            $table->string('Attachment');
            $table->integer('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('completeds');
    }
}
