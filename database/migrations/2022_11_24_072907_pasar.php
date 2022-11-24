<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Pasar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
        Schema::create('pasar', function (Blueprint $table) {
            $table->uuid('pasar_id')->primary();
            $table->string('nama_pasar')->nullable();
            $table->string('alamat_pasar')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('role')->nullable();
            $table->string('telp')->nullable();
            $table->string('langlat')->nullable();
            $table->string('foto_pasar')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE pasar ALTER COLUMN pasar_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasar');
    }
}
