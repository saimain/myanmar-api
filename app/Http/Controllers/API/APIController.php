<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegionCollection;
use App\Http\Resources\TownshipCollection;
use App\Models\Regions;
use App\Models\Townships;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getTownships()
    {
        $townships = Townships::all();
        return TownshipCollection::collection($townships);
    }

    public function getRegions()
    {
        $regions = Regions::all();
        return RegionCollection::collection($regions);
    }
}
