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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('orig_filename', 100)->nullable();
            $table->string('mime_type', 50)->nullable();
            $table->bigInteger('filesize');
            $table->text('content')->nullable();
            $table->unsignedBigInteger('id_lyric')->nullable();
            $table->timestamps();
        });

        Schema::table('files', function (Blueprint $table) {
            $table->foreign('id_lyrics')->references('id')->on('setlists')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
