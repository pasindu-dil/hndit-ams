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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('reg_id', 50);
            $table->string('nic', 20);
            $table->string('name', 200);
            $table->string('email', 200);
            $table->text('address')->nullable();
            $table->bigInteger('msisdn')->nullable();
            $table->unsignedInteger('course_id');
            $table->tinyInteger('is_login')->default(1);
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['reg_id', 'nic']);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
