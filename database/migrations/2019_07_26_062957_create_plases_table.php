<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->string();
            $table->string('type_id')->string();
            $table->string('created_at')->string();
            $table->string('updated_at')->string();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plases');
    }
}
