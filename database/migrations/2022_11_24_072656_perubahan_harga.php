<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PerubahanHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
        Schema::create('perubahan_harga', function (Blueprint $table) {
            $table->uuid('perubahan_harga_id')->primary();
            $table->uuid('produk_id')->nullable();
            $table->uuid('pasar_id')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE perubahan_harga ALTER COLUMN perubahan_harga_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perubahan_harga');
    }
}
