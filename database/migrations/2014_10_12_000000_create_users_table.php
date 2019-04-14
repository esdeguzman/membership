<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('status')->default('pending');
            $table->string('username');
            $table->string('email')->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('mobile_number')->unique();
            $table->string('other_contact_numbers')->nullable();
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('birth_date');
            $table->string('gender');
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->string('employer')->nullable();
            $table->string('tin')->nullable();
            $table->text('employer_address')->nullable();
            $table->string('position');
            $table->string('department');
            $table->unsignedDecimal('salary', 8, 2)->nullable();
            $table->text('other_sources_of_income')->nullable();
            $table->unsignedSmallInteger('dependents_count')->nullable();
            $table->string('type')->default('applicant');
            $table->string('referred_by')->nullable();
            $table->dateTime('visited_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
