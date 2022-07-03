<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Morilog\Jalali\Jalalian;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('created_at')->nullable();
//                ->default(Jalalian::fromCarbon(\Carbon\Carbon::now('Asia/Tehran')));
            $table->string('updated_at')->nullable();
            $table->string('mobile')->nullable();
            $table->string('national_code')->nullable();

            $table->string('first_name');
            $table->string('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
