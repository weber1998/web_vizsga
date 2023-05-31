<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SzavakController extends Controller
{
    public function index() {
        $task = response()->json(Szavak::all());
        return $task;
    }

    public function tema($id) {
        $task =
        DB::table('szavaks')
            ->select('*')
            ->join('temas', 'temas.id', '=', 'szavaks.temaId')
            ->where('temas.id','=',$id)
            ->get();
        return $task;
    }

    // tagfüggvények

    public function destroy($id) {
        Szavak::find($id)->delete();
    }

    public function store(Request $request, $id) {
        $task = new Szavak();
        $task->angol = $request->angol;
        $task->magyar = $request->magyar;
        $task->temaId = $request->temaId;
        $task->save();
    }

    public function update(Request $request, $id) {
        $task = Szavak::find($id);
        $task->angol = $request->angol;
        $task->magyar = $request->magyar;
        $task->temaId = $request->temaId;
        $task->save();
    }
}
