<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PortalController extends Controller {

    public function getMasterStudents(){
        $data = DB::connection("mysql-portal")
        ->table("mahasiswa")
        ->where('angkatan', '!=', '-')
        ->orderBy('nim', 'desc')->get();

        $response['error'] = false;
        $response['message'] = 'Success';
        $response['total_data'] = count($data);
        $response['data'] = $data;
        return response()->json($response, 200);
    }

}
