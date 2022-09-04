<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infonutre_data', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nome_usuario');
            $table->string('password');
            $table->timestamp('criado_em')->nullable();
            $table->integer('coins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExsits(infonutre_data);
    }
};
