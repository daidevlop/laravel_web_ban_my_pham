<?php

use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);// Tình trạng hàng tồn kho
            $table->text('description')->nullable();
            $table->text('warranty_policy')->nullable();// Chính sách bảo hành
            $table->decimal('discount', 5, 2)->default(0);// Giảm giá
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
