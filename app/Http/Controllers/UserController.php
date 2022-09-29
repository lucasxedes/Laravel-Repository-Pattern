<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryinterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function store(Request $request, UserRepositoryinterface $model)
    {
        $user = $model->store($request->all());
        return response()->json(['Success create User' => $user]);

    }

    public function update(Request $request, $id, UserRepositoryinterface $model)
    {
        $user = $model->find($id);
        //dd($user);
        $user->update($request->all());
        //dd($user);
        return response()->json(['User Success Update' => $user]);
    }

    public function destroy($id, UserRepositoryinterface $model)
    {
        $user = $model->find($id);
        $user->delete($user);
        return response()->json(['User Success Deleted' => $user]);
    }
}
