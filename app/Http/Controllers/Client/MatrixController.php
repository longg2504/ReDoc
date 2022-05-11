<?php

namespace App\Http\Controllers\Client;

use App\Models\Drugstores;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\CalculateDistanceService;
use Illuminate\Support\Facades\Auth;

class MatrixController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $map = new CalculateDistanceService();
        $originRaw = $map->getGeoCodeFromAddress($user->address);
        $drugstore = Drugstores::all();
        $listDrugstore = [];

        $origin = [
            'latitude' => explode(',', $originRaw)[0],
            'longitude' => explode(',', $originRaw)[1],
            'address' => $user->address
        ];

        $count = 0;

        foreach ($drugstore as $key => $value) {
            if ($user->district == $value->district) {
                $distance = $map->getDistanceByMatrix($user->address, $value->address);
                $listDrugstore[$count]['id'] = $count;
                $listDrugstore[$count]['name'] = $value->name;
                $listDrugstore[$count]['address'] = $value->address;
                $listDrugstore[$count]['distance'] = $distance[0];
                $listDrugstore[$count]['duration'] = $distance[1];

                $address = $map->getGeoCodeFromAddress($value->address);
                $listDrugstore[$count]['latitude'] = explode(',', $address)[0];
                $listDrugstore[$count]['longitude'] = explode(',', $address)[1];
                $count++;
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

        $nearest = $listDrugstore[0];

        return view('client.matrix', compact('origin', 'drugstore', 'listDrugstore', 'nearest'));
    }

    public function nearDrugstore() {

        if (Auth::check()) {
            $map = new CalculateDistanceService();

            $drugstore = Drugstores::all();
            $listDrugstore = [];
            $user = Auth::user();
            $addressOrigin = $user->address;
            $origin = $map->getGeoCodeFromAddress($addressOrigin);

            $count = 0;

            foreach ($drugstore as $key => $value) {
                if ($user->district == $value->district) {
                    $distance = $map->getDistanceByMatrix($addressOrigin, $value->address);
                    $listDrugstore[$count]['id'] = $count;
                    $listDrugstore[$count]['name'] = $value->name;
                    $listDrugstore[$count]['address'] = $value->address;
                    $listDrugstore[$count]['distance'] = $distance[0];
                    $listDrugstore[$count]['duration'] = $distance[1];

                    $address = $map->getGeoCodeFromAddress($value->address);
                    $listDrugstore[$count]['latitude'] = explode(',', $address)[0];
                    $listDrugstore[$count]['longitude'] = explode(',', $address)[1];
                    $count++;
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

            $origin = explode(',', $origin);

            return view('client.list-drugstore', compact('listDrugstore', 'origin', 'addressOrigin'));
        } else {
            return redirect()->route('client.login');
        }
    }
}

?>
