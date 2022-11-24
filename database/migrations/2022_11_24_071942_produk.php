<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
        Schema::create('produk', function (Blueprint $table) {
            $table->uuid('produk_id')->primary();
            $table->string('nama_produk')->nullable();
            $table->string('merk')->nullable();
            $table->string('satuan')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE produk ALTER COLUMN produk_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
