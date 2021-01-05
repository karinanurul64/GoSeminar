<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('SeminarName'); 
            $table->integer('CategoryId'); 
            $table->integer('UserId')->nullable(); 
            $table->String('Organizer'); //penyelenggara
            $table->dateTime('SeminarDate'); 
            $table->String('SeminarLocation');
            $table->integer('Price')->default(0); 
            $table->text('Description'); 
            $table->string('SeminarPhoto');
            $table->String('Status')->default("Unapproved"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminars');
    }
}
