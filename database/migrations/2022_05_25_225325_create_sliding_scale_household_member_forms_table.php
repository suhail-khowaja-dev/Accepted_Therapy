<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidingScaleHouseholdMemberFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliding_scale_household_member_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sliding_scale_id');
            $table->foreign('sliding_scale_id')->references('id')->on('sliding_scale_forms')->onDelete('cascade');

            $table->string('name')->nullable();
            $table->string('relationship_to_you')->nullable();
            $table->string('date_of_birth')->nullable();

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
        Schema::dropIfExists('sliding_scale_household_member_forms');
    }
}
