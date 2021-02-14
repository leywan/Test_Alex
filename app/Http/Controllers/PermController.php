<?php

namespace App\Http\Controllers;

use App\Models\Permanence;
use Illuminate\Http\Request;

class PermController extends Controller
{
    public function create(Request $request)
    {
        return view('forms/permanence');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'raison' => 'required',
            'siret' => 'required',
            'ape' => 'required',
            'adresse' => 'required',
            'adresse2',
            'cp' => 'required',
            'ville' => 'required',
            'tel',
            'email' => 'required|email'
        ]);

        $permanence = new \App\Models\Permanence;
        $permanence->status = $request->status;
        $permanence->raison = $request->raison;
        $permanence->siret = $request->siret;
        $permanence->ape = $request->ape;
        $permanence->adresse = $request->adresse;
        $permanence->adresse2 = $request->adresse2;
        $permanence->cp = $request->cp;
        $permanence->ville = $request->ville;
        $permanence->tel = $request->tel;
        $permanence->email = $request->email;
        $permanence->save();

        return back()
            ->with('success', 'La permanence a été créée avec succès');
    }

    function show()
    {
        $permanence= Permanence::all();
         return view('lists/permlist', ['permanences'=>$permanence]);
    }
}
