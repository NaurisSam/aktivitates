<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dalibnieki;

class DalibniekiController extends Controller
{
    // Read
    public function showAllDalibnieki()
    {
        return view('dalibnieki', [
            'dalibnieki' => DB::table('dalibnieki')
                ->orderBy('DalibnieksID', 'asc')
                ->get()
        ]);
    }

    // Create form
    public function create()
    {
        return view('newDalibnieki');
    }

    // Store
    public function submit(Request $request)
    {
        $dalibnieks = new Dalibnieki();
        $dalibnieks->Vards = $request->input('Vards');
        $dalibnieks->Uzvards = $request->input('Uzvards');
        $dalibnieks->Klase = $request->input('Klase');
        $dalibnieks->Talrunis = $request->input('Talrunis');
        $dalibnieks->Epasts = $request->input('Epasts');
        $dalibnieks->save();

        return redirect()->route('dalibnieki.index');
    }

    // Delete
    public function delete($id)
    {
        DB::table('dalibnieki')
            ->where('DalibnieksID', $id)
            ->delete();
        return redirect('/dalibnieki');
    }

    // Edit form
    public function edit($id)
    {
        $dalibnieks = Dalibnieki::find($id);
        return view('editDalibnieki', ['dalibnieks' => $dalibnieks]);
    }

    // Update
    public function update(Request $request, $id)
    {
        DB::table('dalibnieki')
            ->where('DalibnieksID', $id)
            ->update([
                'Vards' => $request->input('Vards'),
                'Uzvards' => $request->input('Uzvards'),
                'Klase' => $request->input('Klase'),
                'Talrunis' => $request->input('Talrunis'),
                'Epasts' => $request->input('Epasts')
            ]);
        return redirect('/dalibnieki');
    }
}