<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();

        return view("admin.users.index", compact("users"));
    }

    public function edit($id) 
    {
        $user = User::findOrfail($id);

        return view("admin.users.edit", compact("user"));
    }

    public function update(Request $request, $id) 
    {
        $data = $request->all();

        $user = User::findOrfail($id);

        // Controllo l'esistenza della sezione dettagli, se non esiste devo crearlo
        if (!$user->details) {
            $user->details = new UserDetail();

            $user->details->user_id = $user->id;

            $user->details->fill($data);
            $user->details->save();
        } else {
            // Se ho già creato i dettagli a db, posso fare l'update
            $user->details->update($data);
        }

        $user->update($data);

        return redirect()->route("admin.users.edit", $user->id);

    }
}
