<?php

namespace App\Modules\Programa\Http\Controllers;

use App\Modules\Programa\Http\Resources\SubjectResource;
use App\Modules\Programa\Models\Subject;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SubjectController extends Controller
{

    public function index(): \Illuminate\Http\JsonResponse
    {
        return SubjectResource::collection(Subject::root()->get());
    }
}
