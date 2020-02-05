<?php

namespace App\Modules\Programa\Http\Controllers;

use App\Modules\Programa\Services\BancaService;
use Core\Http\Controllers\AApiResourceController;

class ExaminingBoardController extends AApiResourceController
{
    public function __construct(BancaService $service)
    {
        parent::__construct($service);
    }
}
