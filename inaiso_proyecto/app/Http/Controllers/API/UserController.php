<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User; //importamos el modelo
use App\Http\Requests\GuardarUsuarioRequest; //importar el request
use App\Http\Requests\ActualizarUsuarioRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  //obtiene los usuarios
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarUsuarioRequest $request)  //crear usuario
    {
        User::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Usuario creado exitosamente'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response() ->json([
            'res' => true,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarUsuarioRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Usuario modificado exitosamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'res => true',
            'mensaje' => 'Usuario elimindado correctamente'
        ],200);
    }
}
