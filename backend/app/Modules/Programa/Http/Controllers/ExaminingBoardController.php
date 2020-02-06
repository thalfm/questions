<?php

namespace App\Modules\Programa\Http\Controllers;

use App\Modules\Programa\Http\Resources\ExaminingBoardResource;
use App\Modules\Programa\Models\ExaminingBoard;
use Illuminate\Routing\Controller;

class ExaminingBoardController extends Controller
{

    public function index()
    {
        return ExaminingBoardResource::collection(ExaminingBoard::all());
    }
}
