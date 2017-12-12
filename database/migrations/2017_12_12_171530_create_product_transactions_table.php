<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('productId')->unsigned();
            $table->foreign('productId')->references('id')->on('products');

            $table->integer('partyId')->unsigned();
            $table->foreign('partyId')->references('id')->on('party');
            
            
            $table->string('qty')->nullable();
            $table->string('total')->nullable();

            $table->string('type')->comment('whether it is incoming or outgoing');
            
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
        Schema::dropIfExists('product_transactions');
    }
}
