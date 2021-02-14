<?php

namespace App\Http\Controllers;

use App\Models\Permanence;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function create(Request $request)
    {
        return view('forms/site');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'enseigne' => 'required',
            'adresse' => 'required',
            'adresse2',
            'cp' => 'required',
            'ville' => 'required',
            'tel' => 'required',
            'etat'
        ]);

        $site = new \App\Models\Site;
        $site->enseigne = $request->enseigne;
        $site->adresse = $request->adresse;
        $site->adresse2 = $request->adresse2;
        $site->cp = $request->cp;
        $site->ville = $request->ville;
        $site->tel = $request->tel;
        $site->etat = $request->etat;
        $site->save();

        return back()
            ->with('success', 'La site a été créée avec succès');
    }

    function show()
    {
        $site= Site::all();
        return view('lists/sitelist', ['sites'=>$site]);
    }
}
