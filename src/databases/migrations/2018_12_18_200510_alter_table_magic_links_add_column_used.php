<?php
 
  use Illuminate\Support\Facades\Schema;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;
 
  class AlterTableMagicLinksAddColumnUsed extends Migration
 {
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
         Schema::table('magic_links', function (Blueprint $table) {
             $table->integer('used')->default(0);
             $table->softDeletes();
         });
     }
 
      /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('magic_links', function (Blueprint $table) {
             $table->dropColumn('used');
         });
     }
 }
