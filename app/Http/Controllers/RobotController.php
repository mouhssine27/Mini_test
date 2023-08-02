<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use App\Models\Modele;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RobotController extends Controller
{
    public function index(){
        $robots = Robot::all();
        $employeurs = Employee::all();

        // $robots = DB::table('employees')
        // ->join('robots','employee_id', '=', 'employees.id')
        // // ->join('robots' ,'modele_id' , '=' ,'modeles.id')
        // ->get();
        // // dd($robots );
        // $mof

        $modeles = Modele::all();
        return view('robot',compact('robots','employeurs','modeles'));
    }
    public function store(Request $request){
        $data= $request->all();
        $modeleId=  $data['nomModele'];
        $employeurId = $data['nomemployeur'];
        
        Robot::create(
            [
            'serial_number' => $data['nomserie'],
            'modele_id' => $modeleId,
            'employee_id' =>$employeurId ,
         
            'production_date' => $data['dateProduction'],
            'status' => $data['status'],
            
            ]);
            return redirect()->back()->with('success', 'Robot à éte crée avec success');
    }
    public function updateRobot(Request $request ,$RobotId){
        $data=$request->all();
        $robot = Robot::find($RobotId);
        $robot->serial_number =$data['nomserie']; 
        $robot->modele_id=$data['nomModele']; 
        $robot->employee_id =$data['nomemployeur']; 
        $robot->production_date =$data['dateProduction'];
        $robot->status =$data['status'];
        $robot->save();
        return redirect()->back()->with('success', "Robot à éte Modifier avec success");
    }

    public function destroy($RobotId)
    {
        $robot= Robot::find($RobotId);
        $robot->delete();
        return redirect()->back()->with('success', "Robot à éte supprimé avec success");
    }
}
