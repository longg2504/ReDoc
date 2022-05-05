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
    public function index()
    {
        // $getDistanceByMatrix = new CalculateDistanceService('139 xuan hong', '17a cong hoa');
        // dd($getDistanceByMatrix);
        dd(123);
    }
}

?>
