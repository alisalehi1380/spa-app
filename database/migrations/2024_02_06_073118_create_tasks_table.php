<?php

use App\Models\Table;
use App\Models\Task\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(Table::Tasks, function (Blueprint $table) {
            $table->id();
            $table->string(Task::Name);
            $table->boolean(Task::IsCompleted);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists(Table::Tasks);
    }
};
