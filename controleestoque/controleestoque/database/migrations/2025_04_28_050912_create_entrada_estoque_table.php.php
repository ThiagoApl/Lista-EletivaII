<?php

// Laravel - database/migrations/xxxx_xx_xx_create_entradas_estoque_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasEstoqueTable extends Migration
{
    public function up()
    {
        Schema::create('entradas_estoque', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->integer('quantidade');
            $table->date('data');
            $table->string('fornecedor');
            $table->timestamps(); // Created_at and updated_at

            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade'); // Foreign key
        });
    }

    public function down()
    {
        Schema::dropIfExists('entradas_estoque');
    }
}