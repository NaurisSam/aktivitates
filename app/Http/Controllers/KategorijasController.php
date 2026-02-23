<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategorijas;

class KategorijasController extends Controller
{
    // Read
    public function showAllKategorijas()
    {
        return view('kategorijas', [
            'kategorijas' => DB::table('kategorijas')
                ->orderBy('KategorijasID', 'asc')
                ->get()
        ]);
    }

    // Create form
    public function create()
    {
        return view('newKategorijas');
    }

    // Store
    public function submit(Request $request)
    {
        $kategorija = new Kategorijas();
        $kategorija->Nosaukums = $request->input('Nosaukums');
        $kategorija->save();

        return redirect()->route('kategorijas.index');
    }

    // Delete
    public function delete($id)
    {
        DB::table('kategorijas')
            ->where('KategorijasID', $id)
            ->delete();
        return redirect('/kategorijas');
    }

    // Edit form
    public function edit($id)
    {
        $kategorija = Kategorijas::find($id);
        return view('editKategorijas', ['kategorija' => $kategorija]);
    }

    // Update
    public function update(Request $request, $id)
    {
        DB::table('kategorijas')
            ->where('KategorijasID', $id)
            ->update([
                'Nosaukums' => $request->input('Nosaukums')
            ]);
        return redirect('/kategorijas');
    }
}
