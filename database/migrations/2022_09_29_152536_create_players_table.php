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
        if (!Schema::hasTable('players')) {
            Schema::create('players', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('age')->nullable();
                $table->string('gender')->nullable();
                $table->string('email')->unique();
                $table->string('address')->nullable();
                $table->string('club')->nullable();

                $table->timestamps();
            });
        } 
        
       Schema::rename('players','coaches');
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
        
       
         
        
    }
};
