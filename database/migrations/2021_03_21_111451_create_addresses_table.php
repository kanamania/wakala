<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('address_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('region_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('address_wards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('postcode')->nullable();
            $table->unsignedBigInteger('district_id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->softDeletes();
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
        Schema::dropIfExists('address_wards');
        Schema::dropIfExists('address_districts');
        Schema::dropIfExists('address_regions');
        Schema::dropIfExists('address_countries');
    }
}
