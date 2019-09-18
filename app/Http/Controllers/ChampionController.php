<?php

namespace App\Http\Controllers;

use App\Classs;
use App\Level;
use App\Origin;
use App\ViewChampionStats;
use App\ViewChampionMain;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Datatables;

class ChampionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $champions = ViewChampionMain::get();
        $classes = Classs::orderBy('name')->get();
        $origins = Origin::orderBy('name')->get();

        return view('champions.index', compact('champions', 'classes', 'origins'));
    }

    public function stats()
    {
        $levels = Level::get();

        return view('champions.stats', compact('levels'));
    }

    public function dataStats($levelId)
    {
        $data = ViewChampionStats::where('level_id', $levelId)->get();

        return datatables()->of($data)
            ->make(true);
    }
}
