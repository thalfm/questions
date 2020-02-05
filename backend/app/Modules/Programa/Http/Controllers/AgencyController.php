<?php

namespace App\Modules\Programa\Http\Controllers;

use App\Modules\Programa\Services\OrgaoService;
use Core\Http\Controllers\AApiResourceController;

class AgencyController extends AApiResourceController
{
    public function __construct(OrgaoService $service)
    {
        parent::__construct($service);
    }
}
