<?php

namespace App\Policies;

use App\Role;
use App\Models\Employee;
use App\Models\User;

class EmployeePolicy
{
    public function viewAny(User $user): bool
    {
        return true;   // tutti quelli entrati vedono la lista
    }

    public function update(User $user, Employee $employee): bool
    {
        return $user->role === Role::Owner
            || $employee->waiter_id === $user->id;   // il titolare, o il cameriere che l'ha presa
    }

    public function delete(User $user, Employee $employee): bool
    {
        return $user->role === Role::Owner;     // solo il titolare
    }
}