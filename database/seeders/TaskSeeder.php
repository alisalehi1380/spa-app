<?php

namespace Database\Seeders;

use App\Models\Task\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::factory(10)->create();
    }
}
