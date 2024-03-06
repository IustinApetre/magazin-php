<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminiToUsersTable extends Migration
{
public function up()
{
Schema::table('users', function (Blueprint $table) {
$table->boolean('admini')->default(false); // Adăugarea coloanei 'admini' cu valoarea implicită 'false'
});
}

public function down()
{
Schema::table('users', function (Blueprint $table) {
$table->dropColumn('admini'); // Ștergerea coloanei 'admini' în cazul rollback-ului migrării
});
}
}
