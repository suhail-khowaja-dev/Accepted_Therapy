<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleaseInfoFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release_info_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();

            $table->string('your_name')->nullable();
            $table->string('date')->nullable();
            $table->string('person_or_agency_name')->nullable();
            $table->text('release_of_info_checkboxes')->nullable();
            $table->string('other_symtoms')->nullable();
            $table->string('reason')->nullable();
            $table->string('signature')->nullable();

            $table->string('is_active')->default(1);
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
        Schema::dropIfExists('release_info_forms');
    }
}
