<?php


namespace App\Modules\Programa\Services;


use App\Modules\Programa\Models\Agency as OrgaoModel;
use Core\Services\AApiResourceService;

class OrgaoService extends AApiResourceService
{
    public function __construct(OrgaoModel $model)
    {
        parent::__construct($model);
    }
}