<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori',100)->unique();
            $table->timestamps();
            $table->text('deskripsi')->nullable(); // Menambahkan deskripsi kategori

        });
    }

    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
}
