<?php

namespace App\Http\Controllers;

use App\ViewItemMain;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ItemController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $items = ViewItemMain::all();
        // $items = Item::with('tiers', 'item1', 'item2', 'championsItem')->get();
        // $champions = Champion::all()->pluck('image', 'id')->all();
        // $champions = Champion::all()->keyBy('id');

        return view('items.index', compact('items'));
    }
}
