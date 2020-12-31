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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('company_id')->default(0);
            $table->string('username')->unique();
            $table->string('email');
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->string('password');
            $table->enum('gender', ['female', 'male'])->nullable();
            $table->string('province_id')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->integer('parent_id')->default(0);
            $table->boolean('is_banned')->default(0);
            $table->enum('two_factor_status', ['off', 'sms', 'email']);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
