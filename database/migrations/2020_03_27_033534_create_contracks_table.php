<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracks', function (Blueprint $table) {
            $table->id();
            $table->string('contrack_number')->nullable();
            $table->float('fuel')->nullable();
            $table->float('false_amount')->nullable();
            $table->float('driver_salary')->nullable();
            $table->float('road_amount')->nullable();
            $table->float('company_discover')->nullable();
            $table->float('yon_mount')->nullable();
            $table->float('part_discoin')->nullable();
            $table->float('fix_discoin')->nullable();
            $table->float('othen_discoin')->nullable();
            $table->integer('isdel')->default(0);
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
        Schema::dropIfExists('contracks');
    }
}
