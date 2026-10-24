<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebHomeController extends Controller
{
    public function student_results(Request $request)
    {
             // return view('web.parts.server_down');

       if ($request->user_id && $request->password) {
            $user_id = $request->user_id;
            $password = $request->password;
         //$url = "http://jua-erp.local/student/examination/student-result?user_id=" . $user_id . "&password=" . $password;
             $url = "https://board.juaonline.in/student/examination/student-result?user_id=" . $user_id . "&password=" . $password;
        
             $response = Http::get($url);
            //   dd(  $url );
            if ($response->successful()) {
                   // return $response->body(); die;
                    $data = json_decode($response->body(), true);
                      // dd($data);
                     return view('web.content.result', compact('data'));
            }
       }
    }
}
