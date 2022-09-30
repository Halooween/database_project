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
        if (Schema::hasTable('coaches')) {
        Schema::table('coaches', function (Blueprint $table) {
            if (!Schema::hasColumn('coaches', 'height')) {
            $table->text('bio')->nullable();
            $table->float('height')->nullable();
            }
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coaches', function (Blueprint $table) {
            $table->dropIfExists('bio')->nullable();
            $table->dropIfExists('height')->nullable();

        });
    }
};
