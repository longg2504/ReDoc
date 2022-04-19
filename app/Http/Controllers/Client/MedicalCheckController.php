<?php

namespace App\Http\Controllers\Client;

use App\Models\Disease_symptoms;
use App\Models\Symptoms;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MedicalCheckController extends Controller
{
    public function index()
    {
        return view('client.medical-check-up');
    }

    public function getSymptoms(Request $request)
    {
        $data = $request->all();
        $check = Symptoms::where('name', 'like', '%' . $data['keyword'] . '%')->get();
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

                $check = Disease_symptoms::where('symptom_id', $value)->where('disease_id', $preCheckValue->disease_id)->get();
                if (count($check) == 0) {
                    unset($preCheck[$preCheckKey]);
                }
            }
        }

        foreach ($preCheck as $value) {
            $check[] = $value->diseases;
            $prescription[] = $value->diseases->prescriptions;
        }

        return response()->json($prescription);
    }
}

?>
