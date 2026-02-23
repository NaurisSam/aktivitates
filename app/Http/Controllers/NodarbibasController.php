<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nodarbibas;

class NodarbibasController extends Controller
{
    // Read
    public function showAllNodarbibas()
    {
        return view('nodarbibas', [
            'nodarbibas' => DB::table('nodarbibas')
                ->orderBy('NodarbibasID', 'asc')
                ->get()
        ]);
    }

    // Create form
    public function create()
    {
        return view('newNodarbibas');
    }

    // Store
    public function submit(Request $request)
    {
        $nodarbiba = new Nodarbibas();
        $nodarbiba->AktivitatesID = $request->input('AktivitatesID');
        $nodarbiba->VaditajsID = $request->input('VaditajsID');
        $nodarbiba->Diena = $request->input('Diena');
        $nodarbiba->SakumaLaiks = $request->input('SakumaLaiks');
        $nodarbiba->BeiguLaiks = $request->input('BeiguLaiks');
        $nodarbiba->Telpa = $request->input('Telpa');
        $nodarbiba->MacibuGads = $request->input('MacibuGads');
        $nodarbiba->save();

        return redirect()->route('nodarbibas.index');
    }

    // Delete
    public function delete($id)
    {
        DB::table('nodarbibas')
            ->where('NodarbibasID', $id)
            ->delete();
        return redirect('/nodarbibas');
    }

    // Edit form
    public function edit($id)
    {
        $nodarbiba = Nodarbibas::find($id);
        return view('editNodarbibas', ['nodarbiba' => $nodarbiba]);
    }

    // Update
    public function update(Request $request, $id)
    {
        DB::table('nodarbibas')
            ->where('NodarbibasID', $id)
            ->update([
                'AktivitatesID' => $request->input('AktivitatesID'),
                'VaditajsID' => $request->input('VaditajsID'),
                'Diena' => $request->input('Diena'),
                'SakumaLaiks' => $request->input('SakumaLaiks'),
                'BeiguLaiks' => $request->input('BeiguLaiks'),
                'Telpa' => $request->input('Telpa'),
                'MacibuGads' => $request->input('MacibuGads')
            ]);
        return redirect('/nodarbibas');
    }
}