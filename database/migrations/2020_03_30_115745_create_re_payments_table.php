<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('c_user_id');
            $table->float('amount')->default(0);
            $table->integer('days')->default(0);
            $table->date('s_date');
            $table->date('e_date');
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
        Schema::dropIfExists('re_payments');
    }
}
