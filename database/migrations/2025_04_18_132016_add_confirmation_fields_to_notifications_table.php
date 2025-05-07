<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfirmationFieldsToNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreignId('confirmed_by')->nullable()->constrained('staff')->onDelete('set null');
            $table->string('confirmation_note')->nullable();
            $table->timestamp('confirmed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['confirmed_by']);
            $table->dropColumn(['confirmed_by', 'confirmation_note', 'confirmed_at']);
        });
    }
}
