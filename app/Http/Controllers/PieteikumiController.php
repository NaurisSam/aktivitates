<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pieteikumi;

class PieteikumiController extends Controller
{
    // Read
    public function showAllPieteikumi()
    {
        return view('pieteikumi', [
            'pieteikumi' => DB::table('pieteikumi')
                ->orderBy('PieteikumsID', 'asc')
                ->get()
        ]);
    }

    // Create form
    public function create()
    {
        return view('newPieteikumi');
    }

    // Store
    public function submit(Request $request)
    {
        $pieteikums = new Pieteikumi();
        $pieteikums->DalibnieksID = $request->input('DalibnieksID');
        $pieteikums->NodarbibasID = $request->input('NodarbibasID');
        $pieteikums->PieteiksanasDatums = $request->input('PieteiksanasDatums');
        $pieteikums->Statuss = $request->input('Statuss');
        $pieteikums->save();

        return redirect()->route('pieteikumi.index');
    }

    // Delete
    public function delete($id)
    {
        DB::table('pieteikumi')
            ->where('PieteikumsID', $id)
            ->delete();
        return redirect('/pieteikumi');
    }

    // Edit form
    public function edit($id)
    {
        $pieteikums = Pieteikumi::find($id);
        return view('editPieteikumi', ['pieteikums' => $pieteikums]);
    }

    // Update
    public function update(Request $request, $id)
    {
        DB::table('pieteikumi')
            ->where('PieteikumsID', $id)
            ->update([
                'DalibnieksID' => $request->input('DalibnieksID'),
                'NodarbibasID' => $request->input('NodarbibasID'),
                'PieteiksanasDatums' => $request->input('PieteiksanasDatums'),
                'Statuss' => $request->input('Statuss')
            ]);
        return redirect('/pieteikumi');
    }
}