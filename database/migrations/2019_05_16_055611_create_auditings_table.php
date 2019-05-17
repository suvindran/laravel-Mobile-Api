<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aadhar_card');
            $table->string('pan_card');
            $table->string('gst_no');
            $table->string('commands');
            $table->foreign('user_fk_id')->references('id')->on('users');
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
        Schema::dropIfExists('auditings');
    }
}
