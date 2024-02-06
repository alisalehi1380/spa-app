<?php

namespace App\Http\Controllers\Api\Task\Resources;

use App\Models\Task\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    const Id = 'id';
    const Name = 'name';
    const IsCompleted = 'is_completed';
    
    public function toArray(Request $request): array
    {
        return [
            self::Id => $this->{Task::Id},
            self::Name => $this->{Task::Name},
            self::IsCompleted => (boolean) $this->{Task::IsCompleted},
        ];
    }
}
