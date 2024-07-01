<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAll()
    {
        $user = User::
            join('users_status', 'users.status_id', '=', 'users_status.id')
            ->join('departments', 'users.department_id', '=', 'departments.id')
            ->select('users.*', 'users_status.name as status_name', 'departments.name as department_name')
            ->paginate();

        return response()->json($user);
    }

    public function getById($id)
    {
        return User::find($id);
    }
}
