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
            $table->string('name', 50);
            $table->string('email', 50);
            $table->integer('phone');
            $table->string('university', 50);
            $table->string('faculty', 50);
            $table->string('department', 50)->nullable();
            $table->integer('academic_year');
            $table->string('facebook_profile_link', 50);
            $table->string('living_area', 50);
            $table->string('first_question', 100);
            $table->string('second_question', 100);
            $table->enum('first_preference_committee', ['IT', 'HR', 'PR', 'FR', 'AC', 'MM', 'GM', 'Proj']);
            $table->string('first_preference_committee_first_question', 100);
            $table->string('first_preference_committee_second_question', 100);
            $table->enum('second_preference_committee', ['IT', 'HR', 'PR', 'FR', 'AC', 'MM', 'GM', 'Proj']);
            $table->string('second_preference_committee_first_question', 100);
            $table->string('second_preference_committee_second_question', 100);
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
