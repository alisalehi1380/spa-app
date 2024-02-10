<?php

namespace App\Http\Controllers\Api\Task;

use App\Http\Controllers\Api\Task\Requests\StoreTaskRequest;
use App\Http\Controllers\Api\Task\Requests\UpdateTaskRequest;
use App\Http\Controllers\Api\Task\Resources\TaskResource;
use App\Http\Controllers\Controller;
use App\Models\Task\Task;

class TaskController extends Controller
{
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    public function create()
    {
        //
    }

    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());
        
        return TaskResource::make($request);
    }

    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(UpdateTaskRequest $request, Task $task) : TaskResource
    {
        $task->update($request->validated());
        
        return TaskResource::make($task);
    }

    public function destroy(string $id)
    {
        //
    }
}
