<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text(column: 'description')->nullable();
            $table->integer('headcount')->nullable(); // 新增人数字段
            $table->string('nature')->nullable(); // 新增性质字段
            $table->decimal('budget', 10, 2)->nullable(); // 新增预算字段，使用 decimal 类型来存储金额
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
