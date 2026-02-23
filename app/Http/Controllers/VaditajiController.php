<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vaditaji;

class VaditajiController extends Controller
{
    // Read
    public function showAllVaditaji()
    {
        return view('vaditaji', [
            'vaditaji' => DB::table('vaditaji')
                ->orderBy('VaditajsID', 'asc')
                ->get()
        ]);
    }

    // Create form
    public function create()
    {
        return view('newVaditaji');
    }

    // Store
    public function submit(Request $request)
    {
        $vaditajs = new Vaditaji();
        $vaditajs->Vards = $request->input('Vards');
        $vaditajs->Uzvards = $request->input('Uzvards');
        $vaditajs->Talrunis = $request->input('Talrunis');
        $vaditajs->Epasts = $request->input('Epasts');
        $vaditajs->Specializacija = $request->input('Specializacija');
        $vaditajs->save();

        return redirect()->route('vaditaji.index');
    }

    // Delete
    public function delete($id)
    {
        DB::table('vaditaji')
            ->where('VaditajsID', $id)
            ->delete();
        return redirect('/vaditaji');
    }

    // Edit form
    public function edit($id)
    {
        $vaditajs = Vaditaji::find($id);
        return view('editVaditaji', ['vaditajs' => $vaditajs]);
    }

    // Update
    public function update(Request $request, $id)
    {
        DB::table('vaditaji')
            ->where('VaditajsID', $id)
            ->update([
                'Vards' => $request->input('Vards'),
                'Uzvards' => $request->input('Uzvards'),
                'Talrunis' => $request->input('Talrunis'),
                'Epasts' => $request->input('Epasts'),
                'Specializacija' => $request->input('Specializacija')
            ]);
        return redirect('/vaditaji');
    }
}
