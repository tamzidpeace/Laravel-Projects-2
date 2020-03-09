<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class SearchController extends Controller
{
    //
    public function index()
    {
        return view('search');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('countries')
        ->where('name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->name.'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
