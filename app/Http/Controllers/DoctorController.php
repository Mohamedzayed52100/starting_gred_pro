<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;


class DoctorController extends Controller
{

    public $lop=true;

    public function HomeDoctor()
    {



        /*
        Div 3 today pupil
        */

        $unstable_count = DB::table('patient')
            ->join('doctor-patient', 'patient.MRN', '=', 'doctor-patient.MRN')
            ->where('doctor_id', session('doctorid'))->where('status', 'unstable')->count();
        $stable_count = DB::table('patient')
            ->join('doctor-patient', 'patient.MRN', '=', 'doctor-patient.MRN')
            ->where('doctor_id',  session('doctorid'))->where('status', 'stable')->count();
        $emergancy_count = DB::table('patient')
            ->join('doctor-patient', 'patient.MRN', '=', 'doctor-patient.MRN')
            ->where('doctor_id',  session('doctorid'))->where('status', 'emergency')->count();
        // return $data;

        //return $stable_count;
        // return $unstable_count;
        //  return $emergancy_count;




        $table_show = DB::table('patient')
            ->join('patient-disease', 'patient.MRN', '=', 'patient-disease.MRN')
            ->join('disease', 'disease.disease_id', 'patient-disease.disease_id')
            ->where('patient-disease.doctor_id',  session('doctorid'))->where('patient.status' , 'unstable')->paginate(5); //->pluck('patient.name' , 'disease.name'   );
        // ->join('doctor-patient' ,'doctor-patient.doctor_id' , '=' , )->get() ;
        /// return $table_show;




        return view('doctor_pages.HomeDoctor', get_defined_vars());
        return Doctor::all();


        return DB::table('doctor')->get();
    }


    public function medicalrecord_Doctor($id)
    {
        //return $id;


        $data = DB::table('patient')
            ->join('patient-vital-sign', 'patient.MRN', '=', 'patient-vital-sign.MRN')
            //->join('patient-disease', 'patient.MRN', '=', 'patient-vital-sign.MRN')

            ->where('patient.MRN', $id)->first();

          //  return $data;

        $patient_age = Carbon::parse($data->birth_of_date)->age;
        // return $patient_age;

        ///return $data;

        $dataforhealthstatus = DB::table('patient')
       // ->join('patient-vital-sign', 'patient.MRN', '=', 'patient-vital-sign.MRN')
        ->join('patient-disease', 'patient.MRN', '=', 'patient-disease.MRN')

        ->where('patient.MRN', $id)->first();

       // return $dataforhealthstatus;



       $data_complaint =  DB::table('patient_complaint')->where('MRN', $id)->orderBy('created_at', 'desc')->first(); //modern
      // $data_complaint =  DB::table('patient_complaint')->where('MRN', $id)->orderBy('created_at', 'asc')->first(); //old
        
       //return $data_complaint;


       $patient_id_=$id;
       


        return view('doctor_pages.medicalrecord_Doctor', get_defined_vars());
    }
    public function medicalrecord_Doctor_submit(Request $request)
    {
        dd($request->all());
    }


    public function patientListDoctor(Request $request)
    {

        /// return Patient::all();
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        // return Patient::all();

        return view('doctor_pages.patientListDoctor');
    }



    public function emergencyList($lop =true)
    {
        $this->lop=$lop;

        //it's 4:42 am
        $data= Patient::where('status' , 'emergency')->get();
         // return $data;
        $data = DB::table('patient')
      // ->join('doctor-patient' , 'doctor-patient.MRN', '=','patient.MRN' )
        ->join('patient-vital-sign', 'patient.MRN', '=', 'patient-vital-sign.MRN')
        ->join('relative-patient'  ,'patient.MRN'  , '=' , 'relative-patient.MRN' )
        ->join('patient-disease' , 'patient.MRN'  , '=' , 'patient-disease.MRN')
        ->join('doctor-patient' , 'patient.MRN', '=', 'doctor-patient.MRN' )

       // ->join('doctor' , 'doctor_id'  , '=' , 1)
        ->where([
            ['patient.status' ,'=', 'emergency'] ,
            ['doctor-patient.doctor_id' , '=' ,  session('doctorid')],
        ])->get();
        // return $data;
       return view('doctor_pages.emergencyList' , get_defined_vars());

    }
    public function DoctorProfile(){

        $doctor =Doctor::where('doctor_id', session('doctorid'))->first();

        $paient_count =DB::table('doctor-patient')->where('doctor_id', session('doctorid'))->count();

       // return  $doctor;








        return view('doctor_pages.DoctorProfile' , get_defined_vars());

    }



    public function changeDoctoPassword(Request $request){
        $request->validate([
            'old'=>'required' ,
            'password' => 'required',
            'password_comfirmation' => 'required',

        ]);

        DB::table('doctor')->where('doctor_id'  , $request->doctor_id)->update([
            'password'=>$request->password,

        ]);
        return back()->with('password_updated'  , 'Password has be been updated');



        return $request->all();
    }


    public function editDoctorPersonalInfo(Request $request) {
        // DB::table('doctor')->where('doctor_id', $request->doctor_id)->update([
        //     'name'=>'Ahmed Elsadany',
        // ]);

        // return $request->all();


        DB::table('doctor')->where('doctor_id', $request->doctor_id)->update([
            'name'=> $request->name,
            'speciality'=>$request->speciality,
            'date_of_birthday'=>$request->date_of_birthday,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'country'=>$request->country,
            // 'speciality'=>$request->speciality,
        ]);


        return back()->with('Docor_personal_info' , 'Doctor Personal Information Has benn Updated');

       /// return $request->name;

        return DB::table('doctor')->where('doctor_id', $request->doctor_id)->first();



        return var_dump($request->doctor_id);


        $id =$request->id;

        return DB::table('doctor')->where('doctor_id', $id)->first();
        return Doctor::all();

        return DB::table('doctor')->where('doctor_id', $request->doctor_id)->get();

        $doctor=Doctor::where('doctor_id', $request->doctor_id)->get();
        return $doctor;

    }
    public function lockscreensubmit(Request $request){

        $request->validate([
            'password'=>'required',
        ]);


        $data=  DB::table('doctor')->where('doctor_id', $request->doctor_id)->where('password'  , $request->password)->first();

        if($data){
            return redirect('DoctorProfile');
        }
        else return back()->with('invaild_password'  , 'invaild passowrd ');

        return $request->all();

    }


    public function removepatientBydoctor($id){
        return $id;

    }
}
