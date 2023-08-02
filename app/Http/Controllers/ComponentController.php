<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index(){
       $components = Component::all();
        return view('component' , compact('components'));
    }

    public function store(Request $request){
        $data= $request->all();
        Component::create(
            [
            'name' => $data['nomComponent'],
            'description' => $data['description'],
            'cost' => $data['cout'],
            ]);

            return redirect()->back()->with('success', 'Employeur à éte crée avec success');
    }
    public function updateComponent(Request $request ,$ComponentId){
        $data=$request->all();
        $component = Component::find($ComponentId);
        $component->name =$data['nomComponent']; 
        $component->description =$data['description']; 
        $component->cost =$data['cout'];
        $component->save();
        return redirect()->back()->with('success', "Component à éte Modifier avec success");
    }

    public function destroy($ComponentId)
    {
        $modele= Component::find($ComponentId);
        $modele->delete();
        return redirect()->back()->with('success', "Component à éte supprimé avec success");
    }

}
