<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryinterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function store(Request $request, UserRepositoryinterface $model)
    {
        $user = $model->store($request->all());
        return response()->json(['Success create User' => $user]);

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json(['User Success Update' => $user]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return response()->json(['User Success Deleted' => $user]);
    }
}
