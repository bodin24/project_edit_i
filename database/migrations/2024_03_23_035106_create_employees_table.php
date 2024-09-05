<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อ');
            $table->string('full_name')->comment('ชื่อเต็ม');
            $table->string('email')->unique()->comment('Email');
            $table->integer('number')->comment('เบอร์โทร');
            $table->text('description')->comment('ประวัติ');
            $table->string('address')->comment('ที่อยู่');
            $table->string('city')->comment('เมื่อง');
            $table->string('country')->comment('ประเทศ');
            $table->string('postal_code')->comment('รหัสไปรษณีย์');
            $table->string('status')->default('active')->comment('สภานะ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
