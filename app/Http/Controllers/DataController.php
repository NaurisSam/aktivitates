<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Models\Aktivitates;

class DataController extends Controller
{
    //Read
    public function showAllData()
    {
        $aktivitates = new data();
        return view('aktivitates', ['aktivitates' =>DB::table('aktivitates')->orderby('AktivitatesID','asc')->get()]);

    }

    public function create ()
    {
        return view('newAktivitates');
    }

    // Create

    public function submit(Request $request)
    {
        $data = new Data();
        $data->AktivitatesID = $request->input('AktivitatesID');
        $data->Nosaukums = $request->input('Nosaukums');
        $data->Apraksts = $request->input('Apraksts');
        $data->KategorijasID = $request->input('KategorijasID');
        $data->DalibniekuSkaits = $request->input('DalibniekuSkaits');
        $data->save();

        return redirect()->route('data.index');
    }

    // Delete

    public function delete($id)
    {
        DB::table('aktivitates')->where('AktivitatesID', $id)->delete();
        return redirect('/aktivitates');
    }


    // Edit
        public function edit($id)
        {
            $aktivitates = Data::find($id);
            return view('editAktivitates', ['aktivitates' => $aktivitates]);
        }
                public function update(Request $request, $id)
        {  
            DB::table('aktivitates')
            ->where('AktivitatesID', $id)
            ->update([
                'Nosaukums' => $request->input('Nosaukums'),
                'Apraksts' => $request->input('Apraksts'),
                'KategorijasID' => $request->input('KategorijasID'),
                'DalibniekuSkaits' => $request->input('DalibniekuSkaits')
            ]);
            return redirect()->to('/aktivitates');
        }
}