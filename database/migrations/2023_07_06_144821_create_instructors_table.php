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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 200);
            $table->string('name', 200);
            $table->string('nic', 12);
            $table->string('email', 200)->nullable();
            $table->string('institute_email', 200)->nullable();
            $table->bigInteger('msisdn');
            $table->enum('status', ['permenent', 'visiting'])->default('permenent');
            $table->text('address')->nullable();
            $table->string('subject_code', 20);
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['nic', 'email', 'institute_email']);
            $table->foreign('subject_code')->references('code')->on('subjects')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
