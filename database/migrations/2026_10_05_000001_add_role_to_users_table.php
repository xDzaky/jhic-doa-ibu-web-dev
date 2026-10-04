<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Add role column to users table if not exists
        if (!Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('role')->default('buyer')->after('email');
            });
        }

        // For SQLite: recreate table without restrictive CHECK constraint
        // so that seller, student, teacher, admin, buyer are all valid roles
        if (config('database.default') === 'sqlite') {
            $db = DB::connection()->getPdo();
            $schema = $db->query("SELECT sql FROM sqlite_master WHERE type='table' AND name='users'")->fetchColumn();
            // Only recreate if there's a restrictive CHECK
            if (strpos($schema, "check") !== false && strpos($schema, "'seller'") === false) {
                $db->exec("BEGIN TRANSACTION");
                $db->exec("CREATE TABLE users_v2 (
                    id integer primary key autoincrement not null,
                    name varchar not null,
                    email varchar not null,
                    nisn varchar,
                    role varchar not null default 'buyer',
                    class_name varchar,
                    competency_status varchar,
                    email_verified_at datetime,
                    password varchar not null,
                    remember_token varchar,
                    created_at datetime,
                    updated_at datetime
                )");
                $db->exec("INSERT INTO users_v2 SELECT * FROM users");
                $db->exec("DROP TABLE users");
                $db->exec("ALTER TABLE users_v2 RENAME TO users");
                $db->exec("COMMIT");
            }
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('role');
            });
        }
    }
};
