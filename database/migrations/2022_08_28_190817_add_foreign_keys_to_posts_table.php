<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // Creo colonna Foreign Key su tabella già esistente
            $table->unsignedBigInteger("user_id")->after("id");
            $table->foreign("user_id")
                ->references("id")
                ->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // dropForeign: TabellaInCuiMiTrovo_NomeDellaColonna_foreign

            $table->dropForeign("posts_user_id_foreign");
            $table->dropColumn("user_id");
        });
    }
}
