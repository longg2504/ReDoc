<?php

namespace App\Http\Controllers\Client;

use App\Models\Disease_symptoms;
use App\Models\Diseases;
use App\Models\Symptoms;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class MedicalCheckController extends Controller
{
    public function index()
    {
        return view('client.medical-check-up');
    }

    public function getSymptoms()
    {
        $check = Symptoms::all()->pluck('name','id');
        return response()->json($check);
    }

    public function getDiseases(Request $request)
    {
        $data = $request->all();
        $listSymptoms = explode(',', $data['listSymptoms']);

        $preCheck = Disease_symptoms::whereIn('symptom_id', $listSymptoms)->get();

        // $preCheck = Disease_symptoms::with('diseases')->where('symptom_id', $listSymptoms[0])->get();
        // unset($listSymptoms[0]);

        // if(count($listSymptoms) > 0) {
        //     foreach ($listSymptoms as $value) {

        //         foreach ($preCheck as $preCheckKey => $preCheckValue) {

        //             $check = $preCheckValue->diseases->symptoms->pluck('id')->toArray();

        //             if (!in_array($value, $check)) {
        //                 unset($preCheck[$preCheckKey]);
        //             }
        //         }
        //     }
        // }

        $result = [];

        foreach ($preCheck as $value) {

            if (!in_array($value->diseases()->with('media')->get(), $result)) {
                $result[] = $value->diseases()->with('media')->get();
            }
            // if(Auth::check()) {
            //     $prescription[] = $value->diseases->prescriptions()->with('medicines', 'diseases')->where('age', '<=', $user->age)->get();
            // } else {
            //     $prescription[] = $value->diseases->prescriptions()->with('medicines', 'diseases')->get();
            // }
        }

        return response()->json($result);
    }


    public function showDisease($id) {

        $disease = Diseases::find($id);
        $symptoms = $disease->symptoms()->get();
        $user = Auth::user();

        if(Auth::check()) {
            $prescription = $disease->prescriptions()->with('medicines')->whereRaw('age <= '. $user->age)->get();
        } else {
            $prescription = $disease->prescriptions()->with('medicines')->get();
        }

        if(count($prescription) == 0) {
            Alert::warning('Success', "T???m th???i ch??a c?? ????n thu???c cho b???nh $disease->name v???i ????? tu???i $user->age !");
            return redirect()->route('client.medical-check-up');
        }

        if (!Auth::check()) {
            Alert::warning('H??y login ????? c?? th??? t??m ???????c nh?? thu???c g???n b???n nh???t!')
            ->showCancelButton()
            ->showConfirmButton()
            ->autoClose(false);
        }

        return view('client.diseases-detail', compact('disease', 'symptoms', 'prescription', 'user'));
    }
}
