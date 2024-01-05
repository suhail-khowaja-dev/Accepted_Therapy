<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidingScaleFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliding_scale_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('team_member_id')->nullable();

            $table->string('date')->nullable();
            $table->string('name')->nullable();
            // house member next table
            $table->string('rent_mortgage')->nullable();
            $table->string('rent_mortgage_amount')->nullable();
            $table->string('electricity')->nullable();
            $table->string('electricity_amount')->nullable();
            $table->string('water_sewer_gas')->nullable();
            $table->string('water_sewer_gas_amount')->nullable();
            $table->string('car_payments')->nullable();
            $table->string('car_payments_amount')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_amount')->nullable();
            $table->string('insurance_car_home_renter')->nullable();
            $table->string('insurance_car_home_renter_amount')->nullable();
            $table->string('other_explain')->nullable();
            $table->string('other_explain_amount')->nullable();
            
            $table->string('wages_salaries_or_tips')->nullable()->length(15);
            $table->integer('amount_1')->nullable();
            $table->string('frequency_1')->nullable();

            $table->string('unemployment_workers')->nullable()->length(15);
            $table->integer('amount_2')->nullable();
            $table->string('frequency_2')->nullable();

            $table->string('child_support')->nullable()->length(15);
            $table->integer('amount_3')->nullable();
            $table->string('frequency_3')->nullable();

            $table->string('another_income_source')->nullable()->length(15);
            $table->integer('amount_4')->nullable();
            $table->string('frequency_4')->nullable();

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
        Schema::dropIfExists('sliding_scale_forms');
    }
}
