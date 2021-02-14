<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAstreintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('astreintes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('mobile');
            $table->foreignId('technicien_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('astreintes');
    }
}
