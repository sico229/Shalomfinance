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
            $table->engine = "InnoDB";
            $table->id();
            $table->string('civilite')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('dateNaissance')->nullable();
            $table->string('email')->unique();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephone')->nullable();
            
            $table->string('langue')->nullable();
            $table->string('pays')->nullable();
            $table->string('last')->nullable();
            $table->string('password');
            $table->string('passwordClair')->nullable();
            $table->string('lastConnect')->nullable();
            $table->string('status')->default("client");
            $table->string('actif')->default("false");            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->unique();
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
