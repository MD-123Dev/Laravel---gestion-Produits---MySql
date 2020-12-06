<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('prix');
            $table->text('Description');
            $table->text('Qte');
            $table->string('image');
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('id')->on('produits')->onDelete('cascade');;//**for solition probleme */
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
        //
        Schema::dropIfExists('details');

    }
}
