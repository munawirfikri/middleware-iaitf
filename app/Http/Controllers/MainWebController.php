<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainWebController extends Controller {

    public function getPostTitle(){
        $data = DB::connection("mysql2")->table("wpi9_posts")->get();

        $response['data'] = $data;
        $response['error'] = false;
        $response['message'] = 'Success';
        return response()->json($response, 200);
    }

}
