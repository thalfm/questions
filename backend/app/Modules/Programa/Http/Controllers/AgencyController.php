<?php

namespace App\Modules\Programa\Http\Controllers;

use App\Modules\Programa\Http\Resources\AgencyResource;
use App\Modules\Programa\Models\Agency;
use Illuminate\Routing\Controller;

class AgencyController extends Controller
{
    public function index()
    {
        return AgencyResource::collection(Agency::all());
    }
}
