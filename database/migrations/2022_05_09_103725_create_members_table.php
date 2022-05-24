<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->date('weddingAnniversary')->nullable();
            $table->string('bornAgain');
            $table->date('salvationDate')->nullable();
            $table->string('previousChurch')->nullable();
            $table->string('membershipClass');
            $table->date('membershipCompletion')->nullable();
            $table->string('workerStatus');
            $table->string('department')->nullable();
            $table->string('houseFellowshipStatus');
            $table->string('fellowshipLocation')->nullable();
            $table->date('dateJoined')->nullable();
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
        Schema::dropIfExists('members');
    }
}
