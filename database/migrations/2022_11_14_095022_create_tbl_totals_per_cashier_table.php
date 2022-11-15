<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_totals_per_cashier', function (Blueprint $table) {
            $table->id();
            $table->string("cashier");
            $table->double("cash");
            $table->double("cheques");
            $table->double("EFT");
            $table->double("portableDevices");
            $table->double("innovation");
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
        Schema::dropIfExists('tbl_totals_per_cashier');
    }
};
