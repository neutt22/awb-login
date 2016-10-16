<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->string('unit')->nullable()->change();
            $table->string('alt_part_number')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->string('control')->nullable()->change();
            $table->string('cage')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->string('unit')->nullable(false)->change();
            $table->string('alt_part_number')->nullable(false)->change();
            $table->string('category')->nullable(false)->change();
            $table->string('control')->nullable(false)->change();
            $table->string('cage')->nullable(false)->change();
        });
    }
}
