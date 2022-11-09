<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('agent_name');
            $table->string('agent_number');
            $table->string('super_agent_name')->nullable();
            $table->string('super_agent_number')->nullable();
            $table->string('password');
            $table->string('street');
            $table->string('ward')->nullable();
            $table->unsignedBigInteger('district_id');
            $table->rememberToken();
            $table->timestamp('email_verified_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
