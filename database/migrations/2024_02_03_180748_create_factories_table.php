<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factories', function (Blueprint $table) {
            $table->id();
            $table->string('telefono_contacto')->default('0');
            $table->integer('articulos_provistos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        /*Schema::table('article__factory', function (Blueprint $table) {
            $table->dropForeign('article__factory_factory_id_foreign');
            $table->dropColumn('factory_id');
        });*/
        Schema::dropIfExists('factories');
    }
};
