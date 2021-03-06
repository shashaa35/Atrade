<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');

            $table->string('products');
            $table->string('payments');

            $table->integer('partyId')->unsigned();
            $table->foreign('partyId')->references('id')->on('party');
            

            $table->string('total')->nullable();
            $table->string('paid')->nullable();
            $table->string('status')->nullable();

            $table->string('remarks')->nullable();
            
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
        Schema::dropIfExists('bills');
    }
}
