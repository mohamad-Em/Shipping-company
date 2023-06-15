<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('Agent_ID');
            $table->string('Port_of_Loading_POL');
            $table->string('Country_of_Origin');
            $table->string('Port_of_Destination_POD');
            $table->string('Country_of_Destination');
            $table->string('VESSEL_VOYAGE');
            $table->string('Cut_off');
            $table->string('Departure_Date');
            $table->string('Arrival_Date');
            $table->string('20_Standard');
            $table->string('40_Standard');
            $table->string('20_Refrigerated');
            $table->string('40_Refrigerated');
            $table->string('40_High_Cube');
            $table->string('container_currency');
            $table->string('Shipping_Line');
            $table->string('VALID');
            $table->string('Transit_time');
            $table->string('Routing');
            $table->string('Free_time_at_Origin');
            $table->string('Free_Time_at_Destination');
            $table->string('Rate_Type');
            $table->string('Booking_Type');
            $table->string('Origin_Charges_OTHC');
            $table->string('OTHC_Currency');
            $table->string('Destination_Charge_DTHC');
            $table->string('DTHC_Currency');
            $table->string('Documentation');
            $table->string('Docs_Currency');
            $table->string('Cancelation_fee');
            $table->string('Cancelation_Currency');
            $table->string('visits')->default(0);
            $table->string('booking')->default(0);
            $table->string('cst_id')->nullable();
            $table->string('user_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
