<?php

namespace Database\Factories\Task;

use App\Models\Task\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            Task::Name        => fake()->sentence,
            Task::IsCompleted => rand(0, 1)
        ];
    }
}
