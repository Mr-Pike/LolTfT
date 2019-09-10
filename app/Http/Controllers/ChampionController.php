<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionMainView;
use App\Item;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ChampionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $champions = ChampionMainView::get();

        return view('champions.index', compact('champions'));
    }


    // Old method.
    /*public function index()
    {
        $champions = Champion::with('cost', 'tiers', 'classes', 'origins','items')->get();
        $items = Item::all()->keyBy('id');

        return view('champions.index-old', compact('champions', 'items'));
    }*/
}
