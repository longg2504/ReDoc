<?php

namespace App\Http\Controllers\Client;

use App\Models\Categories;
use App\Models\Disease_symptoms;
use App\Models\Symptoms;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\CalculateDistanceService;

class MatrixController extends Controller
{
    public function index(Request $request)
    {
        $map = new CalculateDistanceService();
        $origin = $map->getGeoCodeFromAddress($request->origin);
        $destination = $map->getGeoCodeFromAddress($request->destination);

        return view('client.matrix', compact('origin', 'destination'));
    }
}

?>
