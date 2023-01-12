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
        Schema::create('subscribers', function(Blueprint $table){
            
            $table->id();
            $table->string('nombre',200);
            $table->string('apellidos',200);
            $table->string('email',200);
            $table->string('telefono',20);
            $table->longText('mensaje',200);
            $table->timestamp('creacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
