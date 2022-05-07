<?php

namespace App\Http\Controllers\Client;

use App\Models\Drugstores;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\CalculateDistanceService;
use Illuminate\Support\Facades\Auth;

class MatrixController extends Controller
{
    public function index(Request $request)
    {
        // $map = new CalculateDistanceService();
        // $originRaw = $map->getGeoCodeFromAddress($request->origin);
        // $drugstore = Drugstores::all();
        // $listDrugstore = [];

        // $origin = [
        //     'latitude' => explode(',', $originRaw)[0],
        //     'longitude' => explode(',', $originRaw)[1],
        //     'address' => $request->origin
        // ];

        // foreach ($drugstore as $key => $value) {
        //     if ($key < 1) {
        //         $distance = $map->getDistanceByMatrix($request->origin, $value->address);
        //         $listDrugstore[$key]['id'] = $value->id;
        //         $listDrugstore[$key]['name'] = $value->name;
        //         $listDrugstore[$key]['address'] = $value->address;
        //         $listDrugstore[$key]['distance'] = $distance[0];
        //         $listDrugstore[$key]['duration'] = $distance[1];

        //         $address = $map->getGeoCodeFromAddress($value->address);
        //         $listDrugstore[$key]['latitude'] = explode(',', $address)[0];
        //         $listDrugstore[$key]['longitude'] = explode(',', $address)[1];
        //     }
        // }

        // for ($i=0; $i < count($listDrugstore); $i++) {
        //     for ($j=$i+1; $j < count($listDrugstore); $j++) {
        //         if ( $listDrugstore[$i]['distance'] > $listDrugstore[$j]['distance'] ) {
        //             $temp = $listDrugstore[$i];
        //             $listDrugstore[$i] = $listDrugstore[$j];
        //             $listDrugstore[$j] = $temp;
        //         }
        //     }
        // }

        // $nearest = $listDrugstore[0];

        // return view('client.matrix', compact('origin', 'drugstore', 'listDrugstore', 'nearest'));
        return view('client.matrix');
    }

    public function nearDrugstore() {

        if (Auth::check()) {
            $map = new CalculateDistanceService();

            $drugstore = Drugstores::all();
            $listDrugstore = [];
            $user = Auth::user();

            foreach ($drugstore as $key => $value) {
                if ($key < 1) {
                    $distance = $map->getDistanceByMatrix($user->address, $value->address);
                    $listDrugstore[$key]['id'] = $value->id;
                    $listDrugstore[$key]['name'] = $value->name;
                    $listDrugstore[$key]['address'] = $value->address;
                    $listDrugstore[$key]['distance'] = $distance[0];
                    $listDrugstore[$key]['duration'] = $distance[1];

                    $address = $map->getGeoCodeFromAddress($value->address);
                    $listDrugstore[$key]['latitude'] = explode(',', $address)[0];
                    $listDrugstore[$key]['longitude'] = explode(',', $address)[1];
                }
            }

            for ($i=0; $i < count($listDrugstore); $i++) {
                for ($j=$i+1; $j < count($listDrugstore); $j++) {
                    if ( $listDrugstore[$i]['distance'] > $listDrugstore[$j]['distance'] ) {
                        $temp = $listDrugstore[$i];
                        $listDrugstore[$i] = $listDrugstore[$j];
                        $listDrugstore[$j] = $temp;
                    }
                }
            }

            return view('client.list-drugstore', compact('listDrugstore'));
        } else {
            return redirect()->route('client.login');
        }
    }
}

?>
