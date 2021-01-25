<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

        public function getSessionData(Request $request)
        {
            if($request->session()->has('name'))
            {
                echo $request->session()->get('name');
            }
            else
            {
                echo "no data in the session";
            }
         
        }

        public function storeSessionData(Request $request)
        {
            $request->session()->put('name', 'jennifer');
            echo "data has been added to the function";
        }

        public function deleteSessionData(Request $request)
        {
            $request->session()->froget('name');
            echo "Data has been removed from the session";
        }

}
