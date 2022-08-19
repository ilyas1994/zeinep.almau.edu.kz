<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->string('aboutColledge');
            $table->string('ForStudents');
            $table->string('Contacts');
            $table->string('image');
            $table->string('buttonSendRequestHeader');
            $table->string('invite');
            $table->string('speciality0114');
            $table->string('speciality0413');
            $table->string('speciality0613');
            $table->string('speciality1013');
            $table->string('speciality1015');
            $table->string('advantageMainText');
            $table->string('advantage1');
            $table->string('advantage2');
            $table->string('advantage3');
            $table->string('advantage4');
            $table->string('advantage5');
            $table->string('advantageText1');
            $table->string('advantageText2');
            $table->string('advantageText3');
            $table->string('advantageText4');
            $table->string('advantageText5');
            $table->string('price');
            $table->string('mission');
            $table->text('missionText');
            $table->string('setRequestText');
            $table->string('buttonSetRequest');
            $table->string('email');
            $table->string('number');
            $table->string('obwagaCheck');
            $table->string('sendButton');
            $table->text('footerContact');


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
        Schema::dropIfExists('main_pages');
    }
}
