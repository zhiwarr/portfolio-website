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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fb_url')->nullable()->after('address'); // Adjust the 'after' column as needed
            $table->string('inst_url')->nullable()->after('fb_url');
            $table->string('gmail_url')->nullable()->after('inst_url');
            $table->string('linkedin_url')->nullable()->after('gmail_url');
            $table->string('github_url')->nullable()->after('linkedin_url');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fb_url');
            $table->dropColumn('inst_url');
            $table->dropColumn('gmail_url');
            $table->dropColumn('linkedin_url');
            $table->dropColumn('github_url');
        });
    }
};