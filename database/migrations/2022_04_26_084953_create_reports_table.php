<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('idLapor');
            $table->foreignId('idKomentar')
            ->nullable()
            ->constrained('comments')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('idDiskusi')
            ->nullable()
            ->constrained('discusses')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('idKonten')
            ->nullable()
            ->constrained('contents')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('idPelapor')
            ->constrained('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
