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
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->text('message');
                $table->timestamp('time')->useCurrent();

                
            });

        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
};
