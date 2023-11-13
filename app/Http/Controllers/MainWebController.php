<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainWebController extends Controller {

    public function getPostTitle(){
        $data = DB::connection("mysql2")
        ->table("wpi9_posts")
        ->select('post_title')
        ->where('post_type', '=', 'post')
        ->orderBy('post_date', 'desc')->get();

        $response['error'] = false;
        $response['message'] = 'Success';
        $response['total_data'] = count($data);
        $response['data'] = $data;
        return response()->json($response, 200);
    }

}
