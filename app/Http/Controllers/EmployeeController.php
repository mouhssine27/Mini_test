<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(){
        $employeurs = Employee::all();
        return view('employee',compact('employeurs'));
    }

    public function store(Request $request){
        $data= $request->all();
          Employee::create(
            [
            'name' => $data['nomEmployeur'],
            'email' => $data['EmailEmployeur'],
            'position' => $data['position'],
            'hire_date' => $data['hire_date'],
            ]);
            return redirect()->back()->with('success', 'Employeur à éte crée avec success');
    }

    public function updateEmployeur(Request $request ,$EmployeurId){
        $data=$request->all();
        $employeur = Employee::find($EmployeurId);
        $employeur->name =$data['nomEmployeur']; 
        $employeur->email  =$data['EmailEmployeur']; 
        $employeur->position =$data['position']; 
        $employeur->hire_date =$data['hire_date'];
        $employeur->save();
        return redirect()->back()->with('success', "Employeur à éte Modifier avec success");
    }

    public function destroy($EmployeurId)
    {
        $employeur= Employee::find($EmployeurId);
        $employeur->delete();
        return redirect()->back()->with('success', "Employeur à éte supprimé avec success");
    }

    
}
