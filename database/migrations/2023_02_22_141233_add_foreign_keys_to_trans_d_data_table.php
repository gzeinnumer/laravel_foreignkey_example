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
        Schema::table('trans_d_data', function (Blueprint $table) {
            $table->foreign(['id_data'], 'trans_d_data_ibfk_1')->references(['id'])->on('trans_h_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trans_d_data', function (Blueprint $table) {
            $table->dropForeign('trans_d_data_ibfk_1');
        });
    }
};
