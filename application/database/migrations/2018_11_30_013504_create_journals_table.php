<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol', 256)->nullable();
            $table->string('issn', 256)->nullable();
            $table->string('print_issn', 256)->nullable();
            $table->string('e_issn', 256)->nullable();
            $table->string('collection_name', 256)->nullable();
            $table->string('acronym', 256)->nullable();
            $table->string('short_title', 256)->nullable();
            $table->string('title', 256)->nullable();
            $table->string('short_title_nlm', 256)->nullable();
            $table->string('publisher', 256)->nullable();
            $table->text('url_journal_page')->nullable();
            $table->string('license', 256)->nullable();
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
        Schema::dropIfExists('journals');
    }
}
