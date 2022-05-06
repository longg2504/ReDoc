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

    public function getSymptoms(Request $request)
    {

        $check = Symptoms::all()->pluck('name','id');
        return response()->json($check);
    }

    public function getDiseases(Request $request)
    {
        $data = $request->all();
        $listSymptoms = explode(',', $data['listSymptoms']);

        $preCheck = Disease_symptoms::with('diseases')->where('symptom_id', $listSymptoms[0])->get();
        unset($listSymptoms[0]);

        foreach ($listSymptoms as $value) {

            foreach ($preCheck as $preCheckKey => $preCheckValue) {

                $check = $preCheckValue->diseases->symptoms->pluck('id')->toArray();

                if (!in_array($value, $check)) {
                    unset($preCheck[$preCheckKey]);
                }
            }
        }

        foreach ($preCheck as $value) {

            $check[] = $value->diseases;
            $prescription[] = $value->diseases->prescriptions()->with('medicines', 'diseases')->get();
        }

        return response()->json($prescription);
    }


    public function showDisease($id) {

        $disease = Diseases::find($id);
        $symptoms = $disease->symptoms()->get();
        $prescription = $disease->prescriptions()->with('medicines')->get();
        $user = auth()->user();

        if (!Auth::check()) {
            Alert::warning('Hãy login để có thế tìm được nhà thuốc gần bạn nhất!')
            ->showCancelButton()
            ->showConfirmButton()
            ->autoClose(false);
        }

        return view('client.diseases-detail', compact('disease', 'symptoms', 'prescription', 'user'));
    }
}
