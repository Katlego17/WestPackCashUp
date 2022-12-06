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
        Schema::create('reciept_cash_up_summary', function (Blueprint $table) {
            $table->id();
            $table->double("totalG4SDeposit1");
            $table->double("looseChange");
            $table->double("totalG4SDeposit2");
            $table->double("changeFromBank");
            $table->string("comments");
            $table->string("start")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string("title")->default("Cash Up Done!");
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
        Schema::dropIfExists('reciept_cash_up_summary');
    }
};
