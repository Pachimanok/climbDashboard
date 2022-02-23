<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            /* curso */
            $table->string('id_curso');
            /* cliente */
            $table->string('id_cliente');
            /* pago */
            $table->string('metodo')->nullable();
            $table->decimal('descuento',7,2)->nullable();
            $table->integer('monto')->nullable();
            $table->string('pagado')->default('no');

            /* datos de compra */
            $table->string('estado')->default('comprando');
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
        Schema::dropIfExists('compras');
    }
}
