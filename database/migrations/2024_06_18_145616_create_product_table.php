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
            $table->string('slug')->unique();
            $table->integer('stock')->default(1);
            $table->string('productSize')->default('M')->nullable();
            $table->enum('condition',['default','new','hot'])->default('default');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->float('discount')->nullabale();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->decimal('productPrice', 8, 2);
            $table->decimal('productOldPrice', 8, 2)->nullable();
            $table->string('productColor')->nullable();
            $table->text('productDescription')->nullable();
            $table->string('mainImage')->nullable();
            $table->json('subImages')->nullable();
            $table->foreign('cat_id')->references('id')->on('category')->onDelete('SET NULL');
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
