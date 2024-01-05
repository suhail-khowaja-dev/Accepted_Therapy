<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeChildrenFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_children_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intake_form_id');
            $table->foreign('intake_form_id')->references('id')->on('intake_forms')->onDelete('cascade');

            $table->string('no_of_children_radio')->nullable()->length(15);
            
            $table->string('no_of_children')->nullable();
            $table->string('name_child_1')->nullable();
            $table->string('age_of_child_1')->nullable();
            $table->string('relationship_with_child_1')->nullable();

            $table->string('name_child_2')->nullable();
            $table->string('age_of_child_2')->nullable();
            $table->string('relationship_with_child_2')->nullable();

            $table->string('name_child_3')->nullable();
            $table->string('age_of_child_3')->nullable();
            $table->string('relationship_with_child_3')->nullable();

            $table->string('name_child_4')->nullable();
            $table->string('age_of_child_4')->nullable();
            $table->string('relationship_with_child_4')->nullable();

            $table->string('name_child_5')->nullable();
            $table->string('age_of_child_5')->nullable();
            $table->string('relationship_with_child_5')->nullable();

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
        Schema::dropIfExists('intake_children_forms');
    }
}
