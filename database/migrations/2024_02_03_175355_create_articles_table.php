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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            //$table->integer('existencias');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('article__factory', function (Blueprint $table) {
            //$table->dropForeign('article__factory_article_id_foreign');
            //$table->dropColumn('article_id');
        });*/
        Schema::dropIfExists('articles');
    }
};
