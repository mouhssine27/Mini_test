<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index(){
        $models = Modele::all();

        return view('model',compact('models'));
    }

    public function store(Request $request){
        $data= $request->all();
        Modele::create(
            [
            'name' => $data['nomModel'],
            'manufacturer' => $data['fabricant'],
            'description' => $data['description'],
            'cost' => $data['cout'],
            ]);

            return redirect()->back()->with('success', 'Employeur à éte crée avec success');
    }
    public function updateModele(Request $request ,$ModeleId){
        $data=$request->all();
        $modele = modele::find($ModeleId);
        $modele->name =$data['nomModel']; 
        $modele->manufacturer=$data['fabricant']; 
        $modele->description =$data['description']; 
        $modele->cost =$data['cout'];
        $modele->save();
        return redirect()->back()->with('success', "Modele à éte Modifier avec success");
    }

    public function destroy($ModeleId)
    {
        $modele= Modele::find($ModeleId);
        $modele->delete();
        return redirect()->back()->with('success', "Modele à éte supprimé avec success");
    }


}
