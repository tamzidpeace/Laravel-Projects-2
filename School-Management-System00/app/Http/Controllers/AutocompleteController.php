<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Country;
use App\District;
use App\Mail\MyTestMail;

class AutocompleteController extends Controller
{
    //
    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('countries')
        ->where('country_name', '=', "{$query}")
        ->get();
        
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->country_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      $x = json_encode($row->country_name);
      
      return $x;
      return $row->country_name;  
        
     }


    }

    public function dropdown() {
      $countries = Country::all()->pluck('country_name', 'id');

      //return $countries;

      return view('dropdown', compact('countries'));
    }

    public function getStates($id) {
      $districts = District::where('country_id', $id)->pluck('district_name', 'id');
      return json_encode($districts);
    }

    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        \Mail::to('siddharth.shukla@kreativstreet.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
}
