<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index() {
        $task = response()->json(Tema::all());
        return $task;
    }

    // tagfüggvények

    public function show($id) {
        $task = response()->json(Tema::find($id));
        return $task;
    }

    public function destroy($id) {
        Tema::find($id)->delete();
    }

    public function store(Request $request, $id) {
        $task = new Tema();
        $task->temanev = $request->temanev;
        $task->save();
    }

    public function update(Request $request, $id) {
        $task = Tema::find($id);
        $task->temanev = $request->temanev;
        $task->save();
    }
}
