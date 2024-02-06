<?php

use App\Models\Table;
use App\Models\User\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(Table::Users, function (Blueprint $table) {
            $table->id();
            $table->string(User::Name);
            $table->string(User::Email)->unique();
            $table->timestamp(User::EmailVerifiedAt)->nullable();
            $table->string(User::Password);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists(Table::Users);
    }
};
