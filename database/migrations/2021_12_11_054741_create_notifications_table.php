<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('notify_id');
            $table->unsignedBigInteger('entity_object_id');
            $table->enum('send_type', ['send', 'queue'])->default('queue');
            $table->string('subject');
            $table->longText('email_html');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('notify_id')->references('id')->on('users');
            $table->foreign('entity_object_id')->references('id')->on('entity_objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
