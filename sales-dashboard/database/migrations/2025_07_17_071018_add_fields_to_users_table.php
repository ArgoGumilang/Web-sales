<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('telegram_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('role')->default(3); // contoh: 1=Super Admin, 2=Admin, 3/4=sales
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'telegram_id', 'name', 'role']);
        });
    }
}
