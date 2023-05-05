<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getStudents(Request $request)
    {


        /*

               $actionBtn = '<a href="/removepatientBydoctor/'.$row->id.'" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
        */
        if ($request->ajax()) {

           // $data = Patient::latest()->get();
           $data =DB::table('patient')
           ->join('doctor-patient' , 'patient.MRN' , '=' , 'doctor-patient.MRN')
           ->where([
               ['doctor-patient.doctor_id' , '=' ,session('doctorid')],
           ])
           ->get();

            return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('action', function($row){

                //success
                $actionBtn = '<a href="/medicalrecord_Doctor/'.$row->MRN.'" class="delete btn btn-success btn-sm">Show Record</a>';
                // $actionBtn = '<a href="/removepatientBydoctor/'.$row->MRN.'" class="delete btn btn-danger btn-sm">show</a>';
                // $actionBtn = '<a href="/removepatientBydoctor/'.$row->id.'" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function justTest(){

        $data =DB::table('patient')
        ->join('doctor-patient' , 'patient.MRN' , '=' , 'doctor-patient.MRN')
        ->where([
            ['doctor-patient.doctor_id' , '=' ,session('doctorid')],
        ])
        ->get();
        return $data;

       return Patient::latest()->get();
    }
}
