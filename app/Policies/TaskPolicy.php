<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the task.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Task  $task
     * @return bool
     */
    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    public function view(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
    
    /**
     * Determine whether the user can complete the task.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Task  $task
     * @return bool
     */
    public function complete(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
