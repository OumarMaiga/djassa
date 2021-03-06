<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('beneficiaire')->nullable();
            $table->string('telephone')->nullable();
            $table->foreignId('user_id')->reference('id')->on('users')->nullable();
            $table->text('overview')->nullable();
            $table->string('montant')->nullable();
            $table->date('expire')->nullable();
            $table->boolean('paid')->default(0);
            $table->string('etat');
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
        Schema::dropIfExists('services');
    }
}
