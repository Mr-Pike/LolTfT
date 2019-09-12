<?php

namespace App\Http\Controllers;

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

        return view('champions.index', compact('champions'));
    }

    public function stats()
    {
        return view('champions.stats');
    }

    public function dataStats($levelId)
    {
        $data = ViewChampionStats::where('level_id', $levelId)->get();

        return datatables()->of($data)
            ->make(true);
    }


    // Old method.
    /*public function index()
    {
        $champions = Champion::with('cost', 'tiers', 'classes', 'origins','items')->get();
        $items = Item::all()->keyBy('id');

        return view('champions.index-old', compact('champions', 'items'));
    }*/
}
