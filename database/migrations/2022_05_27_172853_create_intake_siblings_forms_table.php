<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeSiblingsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_siblings_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intake_form_id');
            $table->foreign('intake_form_id')->references('id')->on('intake_forms')->onDelete('cascade');

            $table->string('sibling_count')->nullable();
            $table->string('sibling_name')->nullable();
            $table->string('sibling_age')->nullable();
            $table->string('sibling_relation')->nullable();

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
        Schema::dropIfExists('intake_siblings_forms');
    }
}
