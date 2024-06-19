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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->decimal('productPrice', 8, 2);
            $table->decimal('productOldPrice', 8, 2)->nullable();
            $table->string('productColor')->nullable();
            $table->string('productSize')->nullable();
            $table->string('productCategory');
            $table->text('productDescription')->nullable();
            $table->string('mainImage')->nullable();
            $table->json('subImages')->nullable();
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
        Schema::dropIfExists('product');
    }
};
