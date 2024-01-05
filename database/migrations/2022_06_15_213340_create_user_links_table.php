<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_links', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('actual_password')->nullable();
            $table->string('generated_link');
            $table->text('request_for_password')->nullable();
            $table->string('link_used_count');
            $table->string('status');
            $table->boolean('used_status')->nullable();
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
        Schema::dropIfExists('user_links');
    }
}
