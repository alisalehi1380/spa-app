<?php

namespace App\Http\Controllers\Api\Task\Resources;

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
            self::Id => $this->{self::Id},
            self::Name => $this->{self::Name},
            self::IsCompleted => (bool) $this->{self::IsCompleted},
        ];
    }
}
