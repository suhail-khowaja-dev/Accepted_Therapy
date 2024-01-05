<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();

            $table->string('date')->nullable();
            $table->string('name')->nullable();
            $table->text('credit_card_checkbox_details')->nullable();
            $table->string('name_on_card')->nullable();
            $table->string('card_type')->nullable();
            $table->string('last_four_card_no')->nullable();
            $table->string('card_ccv')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('receipt_email')->nullable();
            $table->string('your_name')->nullable();
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
        Schema::dropIfExists('credit_card_forms');
    }
}
