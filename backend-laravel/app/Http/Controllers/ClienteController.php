<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() { return response()->json(Cliente::all()); }
    public function store(Request $request) { return response()->json(Cliente::create($request->all()), 201); }
    public function show($id) { return response()->json(Cliente::findOrFail($id)); }
    public function update(Request $request, $id) { Cliente::findOrFail($id)->update($request->all()); return response()->json("Cliente actualizado"); }
    public function destroy($id) { Cliente::destroy($id); return response()->json("Cliente eliminado"); }
}
