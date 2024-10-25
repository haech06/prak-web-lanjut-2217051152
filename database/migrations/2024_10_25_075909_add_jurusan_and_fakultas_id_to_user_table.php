<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJurusanAndFakultasIdToUserTable extends Migration
{
    public function up()
{
    Schema::table('user', function (Blueprint $table) {
        if (!Schema::hasColumn('user', 'jurusan_id')) {
            $table->foreignId('jurusan_id')->nullable()->constrained('jurusan');
        }
        if (!Schema::hasColumn('user', 'fakultas_id')) {
            $table->foreignId('fakultas_id')->nullable()->constrained('fakultas');
        }
    });
}


    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign(['jurusan_id']);
            $table->dropColumn('jurusan_id');
            
            $table->dropForeign(['fakultas_id']);
            $table->dropColumn('fakultas_id');
        });
    }
}
