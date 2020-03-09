<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function test() {
        $value = Item::all();

        return response()->json($value);
    }

    public function singleItem($id) {
        $values = Item::where('id', $id)->first();

        return response()->json($values);
    }
}
